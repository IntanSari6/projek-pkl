<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lab;

class LabController extends Controller
{

    public function create1()
    {
        return view ('manage-inventory-lab.create1');
    }

    public function store(Request $request)
    {
        $lab= new Lab;
        $lab->lab_name = $request->nama_lab;
        $lab->color = $request->warna;
        $lab->save();
        return redirect()->route('manage-inventory-lab.index');
    }

    public function show()
    {
        $lab = Lab::all();
        return view('index', compact (['lab']));
    }

    public function destroy($id)
    {
        Lab::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Post has been deleted!');
    }
}
