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
        $reqloans = Reqloans::where('id', $id);
        $cekwaktu=$reqloans->first();
        if(date('H:i', strtotime($cekwaktu->start))<=date('H:i', strtotime(now()))){
            $reqloans->update([
                'status'=>'sedang dipakai'
            ]);
            return back();
        }
        return back()->with('error', 'Belum waktunya masuk');
        
    }
    public function get_selesaidatamodal(string $id){
        $reqloan = Reqloans::where('id', $id)->update([
            'status'=>'selesai'
        ]);
        return back();
    }
}
