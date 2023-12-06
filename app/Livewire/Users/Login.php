<?php

namespace App\Livewire\Users;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.users.login');
    }

    public function submitForm()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        } else {
            session()->flash('error', 'Credenciales inválidas. Por favor, inténtalo de nuevo.');
        }
    }
}
