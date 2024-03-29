<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use DateTime;
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

    public function sendLocation(Request $request, Pet $pet)
    {
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
        return dd($request);

        $request->validate([
            'name' => 'required',
            'species' => 'required',
            'photo' => 'required',
        ]);
        $data = [
            'name' => $request->input('name'),
            'species' => $request->input('species'),
            'photo' => "/storage/pet/" . $request->file('photo')->hashName(),
            'user_id' => auth()->id(),
        ];
        $request->file('photo')->store('public/pet');
        Pet::create($data);
        return redirect('/pet')->with('success', 'New Pet Added');
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
            'name1' => 'required|min:4|max:255',
            'species1' => 'required|min:4|max:255',
            // 'photo' => 'required|image' // Anda bisa menambahkan aturan validasi untuk file gambar di sini
        ]);

        // Pastikan file yang diunggah adalah gambar sebelum menyimpannya
        if ($request->hasFile('photo1')) {
            // Jika ada file yang diunggah, lakukan validasi untuk file
            $request->validate([
                'photo1' => 'image|mimes:jpeg,png,jpg,gif', // Contoh validasi untuk jenis file gambar
            ]);

            // Simpan file yang diunggah
            $validatedData['photo1'] = $request->file('photo1')->store('post-images');

            if ($request->oldImage1) {
                Storage::delete($request->oldImage1);
            }
        } else {
            // Jika tidak ada file yang diunggah, gunakan nilai default dari kolom foto
            $validatedData['photo1'] = $request->input('oldImage1');
        }


        $validatedData['user_id'] = auth()->user()->id;

        Pet::where('id', $pet->id)->update([
            'name' => $validatedData['name1'],
            'species' => $validatedData['species1'],
            'photo' => $validatedData['photo1'],
        ]);



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
