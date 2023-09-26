<?php

namespace App\Http\Controllers;

use App\Models\Reqloans;
use Illuminate\Http\Request;

class ManageScheduleController extends Controller
{
    public function manage_schedule(Request $request)
    {
        $reqloan = Reqloans::where('status', 'terima')->get();
        return view('manage_schedule.index', compact('reqloan'));
    }

    public function get_datamodal(string $title){
        $id=explode('-',$title);
        $reqloan = Reqloans::where('id', $id[0])->first();
        return response()->json($reqloan);
    }
}
