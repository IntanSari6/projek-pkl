<?php

namespace App\Http\Controllers;

use App\Models\Reqloans;

use Illuminate\Http\Request;

class ManageLoansController extends Controller
{
    public function manage_loans()
    {
        $reqloans = Reqloans::all();
        return view('manage_loans.index', compact('reqloans'));
    }
}