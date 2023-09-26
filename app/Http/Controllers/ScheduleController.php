<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ScheduleController extends Controller
{
    public function schedule()
    {
        return view('schedule.index');
    }
}
