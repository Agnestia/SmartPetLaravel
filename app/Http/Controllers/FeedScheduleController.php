<?php

namespace App\Http\Controllers;

use App\Models\FeedScheduleTime;
use Illuminate\Http\Request;

class FeedScheduleController extends Controller
{
    public function feedSchedulePage(FeedScheduleTime $feedScheduleTime)
    {
        $feedScheduleTime = $feedScheduleTime->with('feedSchedule')->where('is_water', false)->limit(6)->get();

        return view('schedule.jadwalMakan', compact('feedScheduleTime'));
    }
    public function drinkSchedulePage(FeedScheduleTime $feedScheduleTime)
    {
        $feedScheduleTime = $feedScheduleTime->with('feedSchedule')->where('is_water', true)->limit(6)->get();

        return view('schedule.jadwalMinum', compact('feedScheduleTime'));
    }
}
