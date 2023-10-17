<?php

namespace App\Http\Controllers;

use App\Models\Reqloans;
use Illuminate\Http\Request;
use Adrianorosa\GeoLocation\GeoLocation;


class LandingPageController extends Controller
{
 public function landing_page() {
    $details = GeoLocation::lookup('180.244.129.93');
    $reqloan = Reqloans::whereIn('status', ['terima','sedang dipakai','selesai'])->latest()->paginate(5);
    return view('landing-page', compact('reqloan'));
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

    return response()->json($reqloan);
}
}
