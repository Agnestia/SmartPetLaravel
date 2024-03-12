<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function show()
    {
        return view('pet.editPage');
    }

    public function location()
    {
        return view('pet.location');
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
