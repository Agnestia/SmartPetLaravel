<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function show(Pet $pet)
    {
        $pet = $pet->where('user_id', auth()->user()->id)->get();

        return view('pet.index', compact('pet'));
    }

    public function location(Pet $pet)
    {
        $pet = $pet->select('id', 'name', 'latitude', 'longitude')->where('user_id', auth()->user()->id)->get();

        return view('pet.location', compact('pet'));
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
