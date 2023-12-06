<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    public function render()
    {
        return view('livewire.users.signup');
    }

    public function signup()
    {
        $validatedData = $this->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'same:password',
        ]);

        if ($this->avatar) {
            $avatarPath = $this->avatar->store('photos', 'public');
            $validatedData['avatar'] = $avatarPath;
        }

        $user = User::create($validatedData);

        Auth::login($user);

        return redirect("/");
    }
}
