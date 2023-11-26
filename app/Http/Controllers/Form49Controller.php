<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpWord\TemplateProcessor;

class Form49Controller extends Controller
{
    public function selectform49($id)
    {
        $landholdings = DB::table('landholdings')->where('landholdings.id', $id)->get();
        return view('form.form49', compact('landholdings'));
    }
    public function generateform($id)
    {
        $data = DB::table('landholdings')->where('landholdings.id', $id)->first();
        $paro = DB::table('landholdings')
            ->join('officers', 'officers.id', '=', 'landholdings.paro_id')
            ->select('landholdings.*', 'officers.officer_name')
            ->where('landholdings.id', $id)->first();
        $gettotalArea = DB::table('lots')
            ->where('lots.landholding_id', $id)
            ->where('lots.lotType_id', 1)
            ->sum('lotArea');
        $lotnumbers = DB::table('lots')->select('lotNo')->where('lots.landholding_id', $id)->get();

        $lotNos = [];
        foreach ($lotnumbers as $lotnumber) {
            $lotNos[] = $lotnumber->lotNo;
        }
        
        $lotNoString = implode(', ', $lotNos);
        $templateProcessor = new TemplateProcessor('form-template/FormNo.49.docx');
        $templateProcessor->setValue('firstname', $data->firstname);
        $templateProcessor->setValue('familyname', $data->familyname);
        $templateProcessor->setValue('middlename', $data->middlename);
        $templateProcessor->setValue('municipality', $data->municipality);
        $templateProcessor->setValue('barangay', $data->barangay);
        $templateProcessor->setValue('octNo', $data->octNo);
        $templateProcessor->setValue('lotNo', $lotNoString);
        $templateProcessor->setValue('surveyNo', $data->surveyNo);
        $templateProcessor->setValue('surveyArea', $data->surveyArea);
        $templateProcessor->setValue('taxNo', $data->taxNo);
        $templateProcessor->setValue('municipality', $data->municipality);
        $templateProcessor->setValue('paro', $paro->officer_name);
        $templateProcessor->setValue('totalcarpArea', $gettotalArea);
        $fileName = $data->familyname;
        $templateProcessor->saveAs('Form No.49' . '-' . $fileName . '.docx');
        return response()->download('Form No.49' . '-' . $fileName . '.docx')->deleteFileAfterSend(true);
    }
}
