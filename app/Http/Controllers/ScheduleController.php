<?php

namespace App\Http\Controllers;

use App\Models\Reqloans;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ScheduleController extends Controller
{
    public function schedule()
    {
        $reqloan = Reqloans::whereIn('status', ['terima','sedang dipakai'])->get();
        return view('schedule.index', compact('reqloan'));
    }

    public function get_sedangdipakaidatamodal(string $id){
        Reqloans::where('id', $id)->update([
            'status'=>'sedang dipakai'
        ]);
        return back();
    }
}
