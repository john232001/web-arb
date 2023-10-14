<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpWord\TemplateProcessor;

class Form3Controller extends Controller
{
    public function selectform3($id)
    {
        $landholdings = DB::table('landholdings')->where('landholdings.id', $id)->get();
        return view('form.form3', compact('landholdings'));
    }
    public function generateform($id)
    {
        $data = DB::table('landholdings')
            ->join('maros', 'maros.id', '=', 'landholdings.maro_id')
            ->select('landholdings.*', 'maros.*')
            ->where('landholdings.id', $id)->first();
        $templateProcessor = new TemplateProcessor('form-template/FormNo.3.docx');
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
        $templateProcessor->setValue('phase', $data->phase);
        $templateProcessor->setValue('name', $data->name);
        $fileName = $data->familyname;
        $templateProcessor->saveAs('Form No.3' . '-' . $fileName . '.docx');
        return response()->download('Form No.3' . '-' . $fileName . '.docx')->deleteFileAfterSend(true);
    }
}
