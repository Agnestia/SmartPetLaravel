<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profilePage()
    {
        return view('user.profile');
    }
    public function loginPage()
    {
        return view('landing.login');
    }

    public function login()
    {
        return view('user.forgot');
    }

    public function registerPage()
    {
        return view('landing.register');
    }

    public function register()
    {
        return view('user.register');
    }

    public function editPage()
    {
        return view('landing.edit_user');
    }

    public function edit()
    {
        return view('user.edit');
    }

    public function logout()
    {
        return view('user.profile');
    }
}
