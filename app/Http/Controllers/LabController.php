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
        $lab->nama_lab = $request->nama_lab;
        $lab->warna = $request->warna;
        $lab->save();
        return redirect()->route('manage-inventory-lab.index');
    }

    public function show()
    {
        $lab = Lab::all();
        return view('index', compact (['lab']));
    }

    public function destroy(Lab $lab,$id)
    {
        Lab::destroy($id);
        return redirect('manage-inventory-lab.index')->with('success', 'Post has been deleted!');
    }
}
