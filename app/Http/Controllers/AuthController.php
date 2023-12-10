<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

    public function updateForm(int $id)
    {
        $user = User::findOrFail($id);

        if (Auth::user()->id != $user->id) {
            return redirect()->to('/usuarios/perfil/' . $user->username);
        }

        return view('users.update', [
            'user' => $user
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/usuarios/iniciar-sesion');
    }
}
