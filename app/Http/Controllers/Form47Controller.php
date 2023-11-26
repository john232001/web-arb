<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpWord\TemplateProcessor;

class Form47Controller extends Controller
{
    public function selectform47($id)
    {
        $landholdings = DB::table('landholdings')->where('landholdings.id', $id)->get();
        return view('form.form47', compact('landholdings'));
    }
    public function generateform($id)
    {
        $data = DB::table('landholdings')
            ->leftJoin('asps', 'landholdings.id', '=', 'asps.landholding_id')
            ->where('landholdings.id', $id)
            ->first();

        $gettotalArea = DB::table('lots')
            ->where('lots.landholding_id', $id)
            ->where('lots.lotType_id', 1)
            ->sum('lotArea');

        $getarbs = DB::table('arbs')
            ->leftJoin('lots', 'arbs.id', '=', 'lots.arb_name')
            ->leftJoin('awardtitles', 'lots.id', '=', 'awardtitles.lotNumber_id')
            ->where('arbs.landholding_id', $id)
            ->get();



        $templateProcessor = new TemplateProcessor('form-template/FormNo.47.docx');
        $templateProcessor->setValue('firstname', $data->firstname);
        $templateProcessor->setValue('familyname', $data->familyname);
        $templateProcessor->setValue('middlename', $data->middlename);
        $templateProcessor->setValue('municipality', $data->municipality);
        $templateProcessor->setValue('barangay', $data->barangay);
        $templateProcessor->setValue('octNo', $data->octNo);
        $templateProcessor->setValue('lotNo', $data->lotNo);
        $templateProcessor->setValue('surveyNo', $data->surveyNo);
        $templateProcessor->setValue('surveyArea', $data->surveyArea);
        $templateProcessor->setValue('taxNo', $data->taxNo);
        $templateProcessor->setValue('aspNo', $data->aspNo);
        $templateProcessor->setValue('totalcarpArea', $gettotalArea);
        // Prepare an array to hold the modified values
        $values = [];

        // Iterate through each user record
        foreach ($getarbs as $arbs) {
            // Manipulate the data or create a new structure based on your requirements
            $values[] = [
                'fname' => $arbs->fname,
                'lname' => $arbs->lname,
                'mname' => $arbs->mname,
                'spousename' => $arbs->spousename,
                'address' => $arbs->address,
                'lot' => $arbs->lotNo,
                'crop' => $arbs->crop,
                'lotArea' => $arbs->lotArea,
                'serialNo' => $arbs->serialNo,
                'registerDate' => $arbs->registerDate,
                'awardtitleNo' => $arbs->awardtitleNo,
            ];
        }

        // Clone rows and set values for each user in the $values array
        $templateProcessor->cloneRowAndSetValues('fname', $values);

        $fileName = $data->familyname;
        $templateProcessor->saveAs('Form No.47' . '-' . $fileName . '.docx');
        return response()->download('Form No.47' . '-' . $fileName . '.docx')->deleteFileAfterSend(true);
    }
}
