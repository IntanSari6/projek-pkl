<?php

namespace App\Http\Controllers;

use App\Models\Reqloans;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landing_page() {

        $reqloan = Reqloans::whereIn('status', ['terima','sedang dipakai', 'selesai'])->paginate(5);
        return view('landing-page', compact('reqloan'));
    }
}
