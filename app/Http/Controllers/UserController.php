<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function register()
    {
        return view('user.register');
    }

    public function editPage(User $user)
    {
        $user = $user->where('id', auth()->user()->id)->first();

        return view('user.edit', compact('user'));
    }

    public function edit()
    {
        return view('user.edit');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
