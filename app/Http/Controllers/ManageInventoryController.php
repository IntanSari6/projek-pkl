<?php

namespace App\Http\Controllers;

use App\Models\ManageInventory;
use App\Models\InventoryLab;
use Illuminate\Http\Request;
use App\Models\Lab;
class ManageInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lab = Lab::all();
        return view('manage-inventory-lab.index', [
            'inventory' => InventoryLab::all(),
            'lab' => $lab

        ]);
    }
    public function lab(int $id)
    {
        $lab = Lab::all();
        return view('manage-inventory-lab.lab', [
            'inventory' => InventoryLab::where('lab_id',$id)->paginate(5),
            'lab'=> Lab::find($id),
            'labs' => $lab,
        ]);
    }
    // public function lab2()
    // {
    //     return view('manage-inventory-lab.lab2');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('manage-inventory-lab.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventory= new InventoryLab;
        $inventory->name_goods = $request->name_goods;
        $inventory->item_code = $request->item_code;
        $inventory->status = $request->status;
        $inventory->lab_id = $request->lab_id;
        $inventory->save();
        // $validateData = $request->validate([
        //     'nama_barang' => 'required',
        //     'kode_barang' => 'required|unique:inventory_labs',
        //     'status' => 'required',
        // ]); 
        // $validateData['user_id'] = auth()->user()->id;

        // InventoryLab::create($validateData);

        return redirect('/lab/'.$inventory->lab_id)->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManageInventory  $manageInventory
     * @return \Illuminate\Http\Response
     */
    public function show(InventoryLab $inventory)
    {
        $inventory = InventoryLab::all();
        return view('lab', compact (['inventory']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManageInventory  $manageInventory
     * @return \Illuminate\Http\Response
     */
    public function edit(InventoryLab $inventory,$id)
    {
        $lab_asset = $inventory::where('id',$id)->first();
        // dd($lab);
        return view('/manage-inventory-lab.edit', [
            'inventory' => $lab_asset
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManageInventory  $manageInventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $inventory)
    {
        // dd($id);
        // dd($request->input('nama_barang'));
        $validateData['user_id'] = auth()->user()->id;

        $edit = InventoryLab::find($inventory);
        // dd($edit);
        // $edit->nama_barang = $request->input('nama_barang');
        // $edit->kode_barang = $request->input('kode_barang');
        // $edit->status = $request->input('status');
        $edit->update([
            'nama_barang'=>$request->input('nama_barang'),
            'kode_barang'=>$request->input('kode_barang'),
            'status'=>$request->input('status'),
        ]);

        return redirect('/lab/'.$edit->lab_id)->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManageInventory  $manageInventory
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(InventoryLab $inventory,$id)
    {
        InventoryLab::destroy($id);
        return redirect('/manage-inventory-lab')->with('success', 'Post has been deleted!');
    }
}
