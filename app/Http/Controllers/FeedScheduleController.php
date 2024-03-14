<?php

namespace App\Http\Controllers;

use App\Models\FeedSchedule;
use App\Models\FeedScheduleTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedScheduleController extends Controller
{
    public function feedSchedulePage(FeedScheduleTime $feedScheduleTime)
    {
        $feedScheduleTime = $feedScheduleTime->with('feedSchedule')->where('is_water', false)->latest()->limit(6)->get();

        return view('schedule.jadwalMakan', compact('feedScheduleTime'));
    }

    public function store(Request $request, FeedScheduleTime $feedScheduleTime, FeedSchedule $feedSchedule, Auth $auth)
    {
        $feedSchedule->create([
            'user_id' => auth()->user()->id,
            'amount' => $request->amount,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        $feedScheduleId = $feedSchedule->latest()->first()->id;

        $feedScheduleTime->create([
            'time' => $request->time,
            'is_water' => $request->is_water,
            'feed_schedule_id' => $feedScheduleId
        ]);

        if(isset($request->time2)){
            $feedScheduleTime->create([
                'time' => $request->time2,
                'is_water' => $request->is_water,
                'feed_schedule_id' => $feedScheduleId
            ]);
        }

        if(isset($request->time3)){
            $feedScheduleTime->create([
                'time' => $request->time3,
                'is_water' => $request->is_water,
                'feed_schedule_id' => $feedScheduleId
            ]);
        }

        return redirect()->back();
    }
    public function drinkSchedulePage(FeedScheduleTime $feedScheduleTime)
    {
        $feedScheduleTime = $feedScheduleTime->with('feedSchedule')->where('is_water', true)->limit(6)->get();

        return view('schedule.jadwalMinum', compact('feedScheduleTime'));
    }
}
