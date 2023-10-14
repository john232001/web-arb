<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArbController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'datebirth' => 'required',
            'gender_id' => 'required',
            'address' => 'required',
            'ownership' => 'required',
            'dateOfOath' => 'required',
        ]);

        DB::table('arbs')->insert([
            'landholding_id' => $request->landholding_id,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'mname' => $request->mname,
            'extension' => $request->extension,
            'spousename' => $request->spousename,
            'datebirth' => $request->datebirth,
            'gender_id' => $request->gender_id,
            'address' => $request->address,
            'ownership' => $request->ownership,
            'dateOfOath' => $request->dateOfOath,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back()->with('success', 'Added successfully');
    }
    public function update(Request $request, $id)
    {
        $dataupdate = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'mname' => $request->mname,
            'extension' => $request->extension,
            'spousename' => $request->spousename,
            'datebirth' => $request->datebirth,
            'gender_id' => $request->gender_id,
            'address' => $request->address,
            'ownership' => $request->ownership,
            'dateOfOath' => $request->dateOfOath,
        ];

        DB::table('arbs')->where('id', $id)->update($dataupdate);
        return redirect()->back()->with('success', 'Updated successfully');
    }
    public function delete($id)
    {
        DB::table('arbs')->where('id', $id)->delete();
        return redirect()->back()->with('destroy', 'Deleted successfully');
    }
}
