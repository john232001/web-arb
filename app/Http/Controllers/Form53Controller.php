<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpWord\TemplateProcessor;

class Form53Controller extends Controller
{
    public function selectform53($id)
    {
        $landholdings = DB::table('landholdings')->where('landholdings.id', $id)->get();
        return view('form.form53', compact('landholdings'));
    }
    public function generateform($id)
    {
        $data = DB::table('landholdings')
            ->leftJoin('valuations', 'landholdings.id', '=', 'valuations.landholding_id')
            ->where('landholdings.id', $id)
            ->first();

        $paro = DB::table('landholdings')
            ->join('officers', 'officers.id', '=', 'landholdings.paro_id')
            ->select('landholdings.*', 'officers.officer_name')
            ->where('landholdings.id', $id)->first();

        $templateProcessor = new TemplateProcessor('form-template/FormNo.53.docx');
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
        $templateProcessor->setValue('paro', $paro->officer_name);
        $templateProcessor->setValue('amount', $data->amount);
        $fileName = $data->familyname;
        $templateProcessor->saveAs('Form No.53' . '-' . $fileName . '.docx');
        return response()->download('Form No.53' . '-' . $fileName . '.docx')->deleteFileAfterSend(true);
    }
}
