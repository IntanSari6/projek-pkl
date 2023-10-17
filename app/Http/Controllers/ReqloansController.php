<?php

namespace App\Http\Controllers;

use App\Models\Reqloans;
use Illuminate\Http\Request;
use App\Models\Lab;

class ReqloansController extends Controller
{
    
    public function index()
   {
    $reqloans = Reqloans::where('user_id',auth()->user()->id)->latest()->paginate(5);
    return view('requestLoans.index', compact(['reqloans']));

}

    public function create()
    {
        $lab = Lab::all();
        return view('requestLoans.create',[
            'lab' => $lab
        ]);

    }

    public function store(Request $request)
    {
        Reqloans::create(array_merge($request->except(['_token']),['user_id'=>auth()->user()->id]));
        return redirect('/requestLoans');
    }
}