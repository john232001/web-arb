<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ValuationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'status_id' => 'required',
            'aocNo' => 'required',
            'claimNo' => 'required',
            'dateTransmitted' => 'required',
            'dateofMov' => 'required',
            'dateServed' => 'required',
        ]);

        DB::table('valuations')->insert([
            'landholding_id' => $request->landholding_id,
            'status_id' => $request->status_id,
            'aocNo' => $request->aocNo,
            'claimNo' => $request->claimNo,
            'dateTransmitted' => $request->dateTransmitted,
            'dateofMov' => $request->dateofMov,
            'dateServed' => $request->dateServed,
            'stateReason' => $request->stateReason,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back()->with('success', 'Added successfully');
    }
    public function update(Request $request, $id)
    {
        $dataupdate = [
            'status_id' => $request->status_id,
            'aocNo' => $request->aocNo,
            'claimNo' => $request->claimNo,
            'dateTransmitted' => $request->dateTransmitted,
            'dateofMov' => $request->dateofMov,
            'dateServed' => $request->dateServed,
            'stateReason' => $request->stateReason,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        DB::table('valuations')->where('id', $id)->update($dataupdate);
        return redirect()->back()->with('success', 'Updated successfully');
    }
    public function delete($id)
    {
        DB::table('valuations')->where('valuations.id', $id)->delete();
        return redirect()->back()->with('destroy', 'Deleted successfully');
    }
}
