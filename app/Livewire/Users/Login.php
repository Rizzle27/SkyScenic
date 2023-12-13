<?php

namespace App\Livewire\Users;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    protected $messages = [
        'email.required' => 'El email es requerido.',
        'email.email' => 'El email debe ser una dirección válida (ej: @gmail.com).',
        'password.required' => 'La contraseña es requerida.',
    ];

    public function render()
    {
        return view('livewire.users.login');
    }

    public function login()
    {
        $validatedData = $this->validate();

        if (Auth::attempt($validatedData)) {
            return redirect()->intended('/usuarios/perfil/' . Auth::user()->username);
        } else {
            session()->flash('error', 'Credenciales inválidas. Por favor, inténtalo de nuevo.');
        }
    }
}
