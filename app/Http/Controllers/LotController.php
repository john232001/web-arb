<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LotController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'lotNo' => 'required',
            'lotType_id' => 'required',
            'lotArea' => 'required',
        ]);

        DB::table('lots')->insert([
            'landholding_id' => $request->landholding_id,
            'lotNo' => $request->lotNo,
            'lotType_id' => $request->lotType_id,
            'lotArea' => $request->lotArea,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->back()->with('success', 'Added successfully');
    }
    public function update(Request $request, $id)
    {
        $dataupdate = [
            'lotNo' => $request->lotNo,
            'lotType_id' => $request->lotType_id,
            'lotArea' => $request->lotArea,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        DB::table('lots')->where('id', $id)->update($dataupdate);
        return redirect()->back()->with('success', 'Updated successfully');
    }
    public function delete($id)
    {
        DB::table('lots')->where('lots.id', $id)->delete();
        return redirect()->back()->with('destroy', 'Deleted successfully');
    }
}
