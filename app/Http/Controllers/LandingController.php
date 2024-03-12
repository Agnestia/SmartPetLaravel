<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('landing.index');
    }

    // lokasi hewan ada di view landing dan lainya juga ada di landing


}
