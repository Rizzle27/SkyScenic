<?php

namespace App\Livewire\Users;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Signup extends Component
{
    use WithFileUploads;

    public $avatar;
    public $username;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'username' => [
            'required',
            'unique:users,username',
            'regex:/^[a-zA-Z0-9]+$/'
        ],
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'password_confirmation' => 'required|same:password',
    ];

    protected $messages = [
        'username.required' => 'El nombre de usuario es requerido.',
        'username.unique' => 'Este nombre de usuario ya está en uso.',
        'username.regex' => 'El nombre de usuario no puede tener espacios.',
        'email.required' => 'El email es requerido.',
        'email.email' => 'El email debe ser una dirección válida (ej: @gmail.com).',
        'email.unique' => 'Esta dirección de email ya está en uso.',
        'password.required' => 'La contraseña es requerida.',
        'password.min' => 'La contraseña debe tener un mínimo de :min caracteres.',
        'password_confirmation.required' => 'Necesitas confirmar la contraseña.',
        'password_confirmation.same' => 'Las contraseñas no coinciden.'
    ];

    public function render()
    {
        return view('livewire.users.signup');
    }

    public function signup()
    {
        if($this->avatar != null) {
            $avatarPathName = Carbon::now()->timestamp . '.' . $this->avatar->extension();
            $this->avatar->storeAs('avatar_uploads', $avatarPathName);
        }

        $validatedData = $this->validate();

        if($this->avatar != null) {
            $validatedData['avatar'] = $avatarPathName;
        }

        $user = User::create($validatedData);

        Auth::login($user);

        return redirect('/');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
