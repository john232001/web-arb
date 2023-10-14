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
            ->leftJoin('arbs', 'landholdings.id', '=', 'arbs.landholding_id')
            ->where('landholdings.id', $id)
            ->first();

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
        $templateProcessor->setValue('municipality', $data->municipality);
        $templateProcessor->setValue('fname', $data->fname);
        $templateProcessor->setValue('lname', $data->lname);
        $templateProcessor->setValue('mname', $data->mname);
        $fileName = $data->familyname;
        $templateProcessor->saveAs('Form No.47' . '-' . $fileName . '.docx');
        return response()->download('Form No.47' . '-' . $fileName . '.docx')->deleteFileAfterSend(true);
    }
}
