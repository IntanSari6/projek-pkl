<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lab;
use App\Models\InventoryLab;

class InventoryLabController extends Controller
{
    public function inventory()
    {
        $lab = Lab::all();
        return view('inventory-lab.index', [
            'lab' => $lab
        ]);

    }
    public function labb(int $id)
    {
        $lab = Lab::all();
        return view('inventory-lab.labb', [
            'inventory' => InventoryLab::where('lab_id',$id)->paginate(5),
            'lab'=> Lab::find($id),
            'labs' => $lab
        ]);
    }

}
