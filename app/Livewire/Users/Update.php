<?php

namespace App\Livewire\Users;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class Update extends Component
{
    use WithFileUploads;

    public $user;
    public $username;
    public $name;
    public $lastname;
    public $avatar;
    public $avatarPathName = null;
    public $oldAvatar;

    protected $rules = [
        'username' => [
            'regex:/^[a-zA-Z0-9]+$/'
        ],
    ];

    protected $messages = [
        'username.required' => 'El nombre de usuario es requerido.',
        'username.unique' => 'Este nombre de usuario ya está en uso.',
        'username.regex' => 'El nombre de usuario no puede tener espacios.',
    ];

    public function mount(User $user)
    {
        $this->user = $user;
        $this->username = $user->username;
        $this->name = $user->name;
        $this->lastname = $user->lastname;
        $this->avatar = $user->avatar ? $user->avatar : null;
        $this->oldAvatar = $this->avatar;
    }

    public function validateAvatar()
    {
        if($this->oldAvatar != $this->avatar) {
            return $this->validate([
                'avatar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            ]);
        }
    }

    public function validateUsername()
    {
        return $this->validate([
            'username' => ['required', Rule::unique('users')->ignore($this->user->id)],
        ]);
    }

    public function update()
    {
        $avatarPathName = null;

        if ($this->avatar !== null && $this->oldAvatar != $this->avatar) {
            $this->validateAvatar();
            $avatarPathName = Carbon::now()->timestamp . '.' . $this->avatar->extension();
            $this->avatar->storeAs('avatar_uploads', $avatarPathName);
        }

        $this->validateUsername();

        $validatedData = [
            'username' => $this->username,
            'name' => $this->name,
            'lastname' => $this->lastname,
        ];

        if ($avatarPathName !== null) {
            $validatedData['avatar'] = $avatarPathName;
        }

        $this->user->update($validatedData);

        return redirect('/usuarios/perfil/' . $this->user->username);
    }
    public function render()
    {
        return view('livewire.users.update');
    }
}
