<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function show()
    {
        return view('landing.edit_hewan');
    }

    public function location()
    {
        return view('landing.lokasi_hewan');
    }

    public function create()
    {
        return view('pet.create');
    }

    public function edit()
    {
        return view('pet.edit');
    }

    public function destroy()
    {
        return view('pet.destroy');
    }
}
