<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pet.index', [

            'pets' => Pet::where('user_id', auth()->user()->id)->get()

        ]);
    }

    public function location(Pet $pet)
    {
        $pets = $pet->select('id', 'name', 'latitude', 'longitude')->where('user_id', auth()->user()->id)->get();

        return view('pet.location', compact('pets'));
    }

    public function sendLocation(Request $request, Pet $pet){
        $result = $pet->where('id', $request->id)->update([
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ]);

        return response()->json([
            'success' => boolval($result)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pet.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:4|max:255',
            'species' => 'required|min:4|max:255',
            'photo' => 'required'

        ]);

        $validatedData['photo'] = $request->file('photo')->store('post-images');
        $validatedData['user_id'] = auth()->user()->id; // untuk dimasukkan ke kolom user_id di tabel posts


        Pet::create($validatedData);

        return redirect('/pet')->with('success', 'New Pet Has Been Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        $pets = $pet->where('user_id', auth()->user()->id)->get();

        return view('pet.index', compact('pets'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        return view('pet.index', [

            // 'pet' => $pet,

        ]);
    }

    public function coba(Request $request, Pet $pet)
    {
        dd($request);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {


        $validatedData = $request->validate([
            'name' => 'required|min:4|max:255',
            'species' => 'required|min:4|max:255',
            'photo' => 'required' // Anda bisa menambahkan aturan validasi untuk file gambar di sini
        ]);

        // Pastikan file yang diunggah adalah gambar sebelum menyimpannya


        $validatedData['user_id'] = auth()->user()->id;

        // Update data hewan dengan data yang divalidasi
        Pet::find($pet)->update($validatedData);

        return redirect('/pet')->with('success', 'Pet has been updated');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        if ($pet->photo) {
            Storage::delete($pet->photo);
        }
        Pet::destroy($pet->id);

        return redirect('/pet')->with('success', ' Pet Has Been Delete');
    }
}
