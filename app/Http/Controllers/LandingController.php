<?php

namespace App\Http\Controllers;

use App\Models\FeedHistory;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(User $user, FeedHistory $feedHistory, Pet $pet)
    {
        $user = $user->where('id', auth()->user()->id)->first();
        $feedHistory = $feedHistory->where('user_id', auth()->user()->id)->limit(10)->get();
        $petCount = $pet->where('user_id', auth()->user()->id)->count();

        return view('index', compact('user', 'feedHistory', 'petCount'));
    }
}
