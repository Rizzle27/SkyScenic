<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function profile(string $username)
    {
        $user = User::where('username', $username)->firstOrFail();

        $photosByUser = $user->photos;

        return view('users.view', [
            'user' => $user,
            'photosByUser' => $photosByUser,
        ]);
    }

    // public function update(User $user, User $profileUser)
    // {
    //     $this->authorize('update', $profileUser);



    //     return redirect()->back()->with('success', 'Perfil actualizado correctamente.');
    // }
}
