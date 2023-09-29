<?php

namespace App\Http\Controllers;

use App\Models\Reqloans;
use Illuminate\Http\Request;

class ReqloansController extends Controller
{
    public function index()
    {
        $reqloans = Reqloans::latest()->paginate(5);
        return view('requestLoans.index', compact(['reqloans']));

    }

    public function create()
    {
        return view('requestLoans.create');
    }

    public function store(Request $request)
    {
        Reqloans::create($request->except(['_token']));
        return redirect('/manage_loans');
        // dd($request->except(['_token']));
    }
}