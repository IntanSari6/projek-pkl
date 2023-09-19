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
            'inventory' => InventoryLab::all(),
            'lab' => $lab  
        ]);

    }
    public function labb()
    {
        return view('inventory-lab.labb', [
            'inventory' => InventoryLab::all()
        ]);
    }

}
