<?php

namespace App\Http\Controllers;

use App\Models\Reqloans;

use Illuminate\Http\Request;

class ManageLoansController extends Controller
{
    public function manage_loans()
    {
        $reqloans = Reqloans::where('status', 'proses')->get();;
        return view('manage_loans.index', compact('reqloans'));
    }

    public function update_status(int $id, string $status){
        Reqloans::where('id', $id)->update([
            'status' => $status  
        ]);
        if ($status=='tolak'){
            return redirect('requestLoans');
        }else if($status=='terima'){
            return redirect('manage_schedule');
        }
       
    }
}