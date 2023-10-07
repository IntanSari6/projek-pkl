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

        $ipAdress = $_SERVER['REMOTE_ADDR'];
        $Ip = explode('.',$ipAdress);
        if($Ip[0]=='192' && $Ip[1]=='168' && $Ip[2]=='1'){
            Reqloans::where('id', $id)->update([
                'status'=>'sedang dipakai'
            ]);
            return back();
        } else {
            return back()->with('error','Silahkan sambungkan dengan WiFi Lab!!');
        }
        
    }
    public function get_selesaidatamodal(string $id){
        $reqloan = Reqloans::where('id', $id)->update([
            'status'=>'selesai'
        ]);
        return back();
    }
}
