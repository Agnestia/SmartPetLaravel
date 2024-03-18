<?php

namespace App\Http\Controllers;

use App\Models\FeedManual;
use Illuminate\Http\Request;

class FeedManualController extends Controller
{
    public function store(Request $request, FeedManual $feedManual)
    {
        $feedManual->create([
            'user_id' => auth()->user()->id,
            'amount' => $request->amount,
            'status' => false
        ]);

        return redirect()->back();
    }

    public function openManual(FeedManual $feedManual)
    {
        $data = $feedManual->where('user_id', auth()->user()->id)->first();
        // $data = $feedManual->where('user_id', 1)->first();

        return response()->json([
            'status' => !is_null($data),
            'data' => $data
        ]);
    }

    public function closeManual(Request $request ,FeedManual $feedManual)
    {
        $feedManual->where('id', $request->id)->delete();
    }
}
