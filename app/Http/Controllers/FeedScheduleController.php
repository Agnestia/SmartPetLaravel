<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedScheduleController extends Controller
{
    public function jadwalMakan()
    {
        return view('schedule.jadwalMakan');
    }
    public function jadwalMinum()
    {
        return view('schedule.jadwalMinum');
    }
}
