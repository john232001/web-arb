<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AwardtitleController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'lotNumber_id' => 'required',
            'awardType_id' => 'required',
            'fbOrcname' => 'required',
            'serialNo' => 'required',
            'epebNo' => 'required',
            'epebDate' => 'required',
            'registerDate' => 'required',
            'awardtitleNo' => 'required',
            'distributeDate' => 'required',
        ]);

        DB::table('awardtitles')->insert([
            'landholding_id' => $request->landholding_id,
            'lotNumber_id' => $request->lotNumber_id,
            'awardType_id' => $request->awardType_id,
            'fbOrcname' => $request->fbOrcname,
            'serialNo' => $request->serialNo,
            'genDate' => $request->genDate,
            'epebNo' => $request->epebNo,
            'epebDate' => $request->epebDate,
            'registerDate' => $request->registerDate,
            'awardtitleNo' => $request->awardtitleNo,
            'distributeDate' => $request->distributeDate,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back()->with('success', 'Added successfully');
    }
    public function update(Request $request, $id)
    {
        $dataupdate = [
            'lotNumber_id' => $request->lotNumber_id,
            'awardType_id' => $request->awardType_id,
            'fbOrcname' => $request->fbOrcname,
            'serialNo' => $request->serialNo,
            'genDate' => $request->genDate,
            'epebNo' => $request->epebNo,
            'epebDate' => $request->epebDate,
            'registerDate' => $request->registerDate,
            'awardtitleNo' => $request->awardtitleNo,
            'distributeDate' => $request->distributeDate,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        DB::table('awardtitles')->where('id', $id)->update($dataupdate);
        return redirect()->back()->with('success', 'Updated successfully');
    }
    public function delete($id)
    {
        DB::table('awardtitles')->where('awardtitles.id', $id)->delete();
        return redirect()->back()->with('destroy', 'Deleted successfully');
    }
}
