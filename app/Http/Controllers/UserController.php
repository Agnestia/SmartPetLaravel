<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function profilePage()
    {
        return view('user.profile');
    }
    public function loginPage()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function registerPage()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'confirmed', 'min:8'],
        // ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function editPage(User $user)
    {
        $user = $user->where('id', auth()->user()->id)->first();

        return view('user.edit', compact('user'));
    }

    public function edit(Request $request, User $user)
    {
        // $user = User::where('id', auth()->user()->id)->first();

        $validatedDataUser = $request->validate([
            'name' => 'required|min:4|max:255',
            'email' => 'required|email',
            // 'photo' => 'required|image',
            'address' => 'required|min:4',
            'phone' => 'required|min:6',
    
            // Anda bisa menambahkan aturan validasi untuk file gambar di sini
        ]);

        if ($request->hasFile('photo')) {
            // Jika ada file yang diunggah, lakukan validasi untuk file
            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif', // Contoh validasi untuk jenis file gambar
            ]);
    
            // Simpan file yang diunggah
            $validatedDataUser['photo'] = $request->file('photo')->store('post-images');

            if($request->oldImageUser){
                Storage::delete($request->oldImageUser);
            }
            
        } else {
            // Jika tidak ada file yang diunggah, gunakan nilai default dari kolom foto
            $validatedDataUser['photo'] = $request->input('oldImageUser');
        }

        User::where('id', auth()->user()->id)->update($validatedDataUser);

        return redirect()->back()->with('success', 'User has been updated');
    }

    public function editPass(Request $request ,User $user)
    {
        if(Hash::check($request->old_password, $user->password))
        {
            $user->where('id', auth()->user()->id)->update([
                'password' => Hash::make($request->new_password),
            ]);
        }

        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
