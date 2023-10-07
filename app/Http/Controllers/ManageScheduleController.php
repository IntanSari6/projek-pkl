<?php

namespace App\Http\Controllers;

use App\Models\Reqloans;
use Illuminate\Http\Request;

class ManageScheduleController extends Controller
{
    public function manage_schedule(Request $request)
    {
        $reqloan = Reqloans::whereIn('status', ['terima','sedang dipakai'])->get();
        return view('manage_schedule.index', compact('reqloan'));
    }

    public function get_datamodal(string $title){
        $id=explode('-',$title);
        $reqloan = Reqloans::where('id', $id[0])->first();
        if($reqloan->status=='terima'){
            $reqloan->action='/get_sedangdipakaidatamodal/'.$reqloan->id;
            $reqloan->action_text='masuk';
         }elseif($reqloan->status=='sedang dipakai'){
            $reqloan->action='/get_selesaidatamodal/'.$reqloan->id;   
            $reqloan->action_text='selesai';
        }
        if($reqloan->user_id==auth()->user()->id) {
            $reqloan->action_button='show';
        }else {
            $reqloan->action_button='hide';
        }
        return response()->json($reqloan);
    }

    public function get_bataldatamodal(string $id){
        $reqloan = Reqloans::where('id', $id)->update([
            'status'=>'batal'
        ]);
        return back();
    }

}
