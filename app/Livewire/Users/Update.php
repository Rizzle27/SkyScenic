<?php

namespace App\Livewire\Users;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $user;
    public $avatar;
    public $username;
    public $name;
    public $lastname;
    public $model_avatar;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->avatar = $user->avatar ? $user->avatar : null;
        $this->username = $user->username;
        $this->name = $user->name;
        $this->lastname = $user->lastname;

        $this->model_avatar = $user->avatar;
    }

    function obtenerModeloAvatar()
    {
        return $this->model_avatar;
    }

    public function render()
    {
        return view('livewire.users.update');
    }
}
