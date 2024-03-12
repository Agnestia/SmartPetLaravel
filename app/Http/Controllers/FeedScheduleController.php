<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedScheduleController extends Controller
{
    public function jadwalMakan()
    {
        //
        return view('landing.jadwalMakan');
    }
    public function jadwalMinum()
    {
        //
        return view('landing.jadwalMinum');
    }
}
