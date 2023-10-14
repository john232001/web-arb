<?php

namespace App\Http\Controllers;

use App\Models\Landholding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class LandholdingController extends Controller
{
    public function index()
    {
        $landholdings = DB::table('landholdings')->get();
        $maro = DB::table('maros')->get();

        return view('landholding.index', compact('landholdings', 'maro'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'lhid' => 'required',
            'firstname' => 'required',
            'familyname' => 'required',
            'municipality' => 'required',
            'barangay' => 'required',
            'octNo' => 'required',
            'surveyArea' => 'required',
            'surveyNo' => 'required',
            'lotNo' => 'required',
            'file' => 'required',
            'maro_id' => 'required'
        ]);

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $file->move('uploads/documents', $fileName);

        DB::table('landholdings')->insert([
            'lhid' => $request->lhid,
            'firstname' => $request->firstname,
            'familyname' => $request->familyname,
            'middlename' => $request->middlename,
            'municipality' => $request->municipality,
            'barangay' => $request->barangay,
            'octNo' => $request->octNo,
            'lotNo' => $request->lotNo,
            'surveyNo' => $request->surveyNo,
            'surveyArea' => $request->surveyArea,
            'taxNo' => $request->taxNo,
            'maro_id' => $request->maro_id,
            'modeOfAcquisition' => $request->modeOfAcquisition,
            'dfNo' => $request->dfNo,
            'coverableArea' => $request->coverableArea,
            'carpableArea' => $request->carpableArea,
            'noncarpableArea' => $request->noncarpableArea,
            'retainedArea' => $request->retainedArea,
            'distributeArea' => $request->distributeArea,
            'landsize' => $request->landsize,
            'majorCrops' => $request->majorCrops,
            'phase' => $request->phase,
            'upals' => $request->upals,
            'yearAdded' => $request->yearAdded,
            'pipeline' => $request->pipeline,
            'targetyear' => $request->targetyear,
            'projectedDelivery' => $request->projectedDelivery,
            'file' => $fileName,
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back()->with('success', 'Added Successfully');
    }
    public function update(Request $request, $id)
    {
        $landholding = Landholding::findOrFail($id);

        $landholding->update([
            'firstname' => $request->firstname,
            'familyname' => $request->familyname,
            'middlename' => $request->middlename,
            'municipality' => $request->municipality,
            'barangay' => $request->barangay,
            'octNo' => $request->octNo,
            'lotNo' => $request->lotNo,
            'surveyNo' => $request->surveyNo,
            'surveyArea' => $request->surveyArea,
            'taxNo' => $request->taxNo,
            'modeOfAcquisition' => $request->modeOfAcquisition,
            'dfNo' => $request->dfNo,
            'coverableArea' => $request->coverableArea,
            'carpableArea' => $request->carpableArea,
            'noncarpableArea' => $request->noncarpableArea,
            'retainedArea' => $request->retainedArea,
            'distributeArea' => $request->distributeArea,
            'landsize' => $request->landsize,
            'majorCrops' => $request->majorCrops,
            'phase' => $request->phase,
            'upals' => $request->upals,
            'yearAdded' => $request->yearAdded,
            'pipeline' => $request->pipeline,
            'targetyear' => $request->targetyear,
            'projectedDelivery' => $request->projectedDelivery,
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        // Check if a new file is uploaded
        if ($request->hasFile('file')) {

            // Get the full path to the existing file
            $filePath = public_path('uploads/documents/' . $landholding->file);

            // If the existing file exists, delete it
            if (File::exists($filePath)) {
                File::delete($filePath);
                Storage::delete(storage_path('app/public/uploads/documents/' . $landholding->file));
            }

            // Get the original name of the uploaded file
            $newFileName = $request->file('file')->getClientOriginalName();

            // Move the uploaded file to the `uploads/documents` directory
            $request->file('file')->move('uploads/documents', $newFileName);

            $landholding->update(['file' => $newFileName]);
        }
        return redirect()->back()->with('success', 'Updated successfully');
    }
    public function delete($id)
    {

        $landholding = Landholding::findOrFail($id);

        $filePath = public_path('uploads/documents/' . $landholding->file);

        if (File::exists($filePath)) {
            File::delete($filePath);
            Storage::delete(storage_path('app/public/uploads/documents/' . $landholding->file));
        }
        DB::table('lots')->where('landholding_id', $id)->delete();
        DB::table('asps')->where('landholding_id', $id)->delete();
        DB::table('arbs')->where('landholding_id', $id)->delete();
        DB::table('valuations')->where('landholding_id', $id)->delete();
        DB::table('awardtitles')->where('landholding_id', $id)->delete();
        $landholding->delete();

        return redirect()->back()->with('destroy', 'Deleted successfully');
    }
    public function download($id)
    {
        $landholding = Landholding::findOrFail($id);
        $filePath = public_path("uploads/documents/{$landholding->file}");
        return response()->download($filePath);
    }
    public function show($id)
    {
        $landholdings = DB::table('landholdings')->where('landholdings.id', $id)->get();

        $arb = DB::table('arbs')
            ->join('landholdings', 'landholdings.id', '=', 'arbs.landholding_id')
            ->join('categories', 'categories.id', '=', 'arbs.gender_id')
            ->select('arbs.*', 'categories.gender')
            ->where('arbs.landholding_id', $id)
            ->get();
        $lots = DB::table('lots')
            ->join('landholdings', 'landholdings.id', '=', 'lots.landholding_id')
            ->join('categories', 'categories.id', '=', 'lots.lotType_id')
            ->select('lots.*', 'categories.lotType')
            ->where('lots.landholding_id', $id)
            ->get();
        $asp = DB::table('asps')
            ->join('landholdings', 'landholdings.id', '=', 'asps.landholding_id')
            ->select('asps.*')
            ->where('asps.landholding_id', $id)
            ->get();

        $awardtitle = DB::table('awardtitles')
            ->join('landholdings', 'landholdings.id', '=', 'awardtitles.landholding_id')
            ->join('lots', 'lots.id', '=', 'awardtitles.lotNumber_id')
            ->join('categories', 'categories.id', '=', 'awardtitles.awardType_id')
            ->select('awardtitles.*', 'categories.awardType', 'lots.lotNo')
            ->where('awardtitles.landholding_id', $id)
            ->get();

        $valuation = DB::table('valuations')
            ->join('landholdings', 'landholdings.id', '=', 'valuations.landholding_id')
            ->join('categories', 'categories.id', '=', 'valuations.status_id')
            ->select('valuations.*', 'categories.transmittalStatus')
            ->where('valuations.landholding_id', $id)
            ->get();

        //get only the value 'Carpable' in ID
        $lotNumber = DB::table('lots')->where('lots.landholding_id', $id)->where('lots.lotType_id', 1)->get();

        $categories = DB::table('categories')->get();

        return view('landholding.view', compact('landholdings', 'arb', 'categories', 'lots', 'asp', 'awardtitle', 'lotNumber', 'valuation'));
    }
}
