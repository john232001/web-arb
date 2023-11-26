<?php

namespace App\Http\Controllers;

use App\Models\Landholding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class LandholdingController extends Controller
{
    public function index()
    {
        $landholdings = DB::table('landholdings')->get();
        $maro = DB::table('officers')->where('officers.position_id', 1)->get();
        $paro = DB::table('officers')->where('officers.position_id', 2)->get();
        return view('landholding.index', compact('landholdings', 'maro', 'paro'));
    }
    public function store(Request $request)
    {
        try {
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
                'maro_id' => 'required',
                'paro_id' => 'required'
            ], [
                'maro_id.required' => 'The maro field is required.',
                'paro_id.required' => 'The paro field is required.'
            ]);

            $landholding = Landholding::create([
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
                'paro_id' => $request->paro_id,
                'modeOfAcquisition' => $request->modeOfAcquisition,
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
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ]);

            if ($request->has('file')) {
                $file = $request->file('file');
                $fileName = $file->getClientOriginalName();
                $file->move('uploads/documents', $fileName);

                $landholding->documents()->create(['file' => $fileName]); // Create a new document record
            }
            return redirect()->back()->with('success', 'Inserted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to insert data: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $landholding = Landholding::findOrFail($id);

        $landholding->update([
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
            'modeOfAcquisition' => $request->modeOfAcquisition,
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
            'maro_id' => $request->maro_id,
            'paro_id' => $request->paro_id,
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

        return redirect()->back()->with('error', 'Deleted successfully');
    }
    public function download($id)
    {
        $landholding = Landholding::findOrFail($id);
        if ($landholding->file) {
            $filePath = public_path("uploads/documents/{$landholding->file}");
            return response()->download($filePath);
        } else {
            return redirect()->back()->with('error', 'No Document Exist!');
        }
    }
    public function show($id)
    {
        $landholdings = DB::table('landholdings')->where('landholdings.id', $id)->get();

        $arb = DB::table('arbs')
            ->join('landholdings', 'landholdings.id', '=', 'arbs.landholding_id')
            ->join('categories', 'categories.id', '=', 'arbs.gender_id')
            ->join('categories AS op', 'op.id', '=', 'arbs.ownership_id')
            ->select('arbs.*', 'categories.gender', 'op.ownership')
            ->where('arbs.landholding_id', $id)
            ->get();
        $lots = DB::table('lots')
            ->join('landholdings', 'landholdings.id', '=', 'lots.landholding_id')
            ->join('arbs', 'arbs.id', '=', 'lots.arb_name')
            ->join('categories', 'categories.id', '=', 'lots.lotType_id')
            ->select('lots.*', 'categories.lotType', 'arbs.fname')
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
            ->join('lots', 'lots.id', '=', 'valuations.lotNumber_id')
            ->select('valuations.*', 'lots.lotNo')
            ->where('valuations.landholding_id', $id)
            ->get();

        //get only the value 'Carpable' in ID
        $lotNumber = DB::table('lots')->where('lots.landholding_id', $id)->where('lots.lotType_id', 1)->get();

        //get only the value of lot number where the lot type is Carpable in ID of landholding
        $lotno = DB::table('lots')->where('lots.landholding_id', $id)->where('lots.lotType_id', 1)->get();

        $arbname = DB::table('arbs')->where('arbs.landholding_id', $id)->get();


        $categories = DB::table('categories')->get();
        return view('landholding.view', compact('landholdings', 'arb', 'categories', 'lots', 'asp', 'awardtitle', 'lotNumber', 'valuation', 'lotno', 'arbname'));
    }
}
