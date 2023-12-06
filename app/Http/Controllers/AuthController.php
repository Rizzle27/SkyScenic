<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('users.login');
    }

    public function signupForm()
    {
        return view('users.signup');
    }
}
