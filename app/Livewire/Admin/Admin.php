<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Admin extends Component
{
    public function changeRole(int $id)
    {
        $user = User::findOrFail($id);

        if (Auth::user()->id != $user->id) {
            if (Auth::user()->role == "superadmin") {
                if ($user->role == "regular") {
                    $user->role = "admin";
                } elseif ($user->role == "admin") {
                    $user->role = "regular";
                } elseif ($user->role == "superadmin") {
                    return redirect()->back()->with('error', 'El rol de superadmin es fundamental, por lo tanto, no se puede cambiar.');
                }
            } elseif (Auth::user()->role == "admin") {
                if ($user->role == "regular") {
                    $user->role = "admin";
                } elseif ($user->role == "admin") {
                    $user->role = "regular";
                } elseif ($user->role == "superadmin") {
                    return redirect()->back()->with('error', 'El rol de superadmin es fundamental, por lo tanto, no se puede cambiar.');
                }
            }
        } else {
            return redirect()->back()->with('error', 'No te podés cambiar el rol a vos mismo.');
        }

        $user->save();
        return redirect()->back()->with('success', 'Rol de usuario cambiado con éxito.');
    }

    public function deleteUser(int $id)
    {
        $user = User::findOrFail($id);

        if (Auth::user()->id != $user->id) {
            $user->delete();
            return redirect()->back()->with('success', 'Usuario eliminado con éxito.');
        } else {
            return redirect()->back()->with('error', 'No te podés eliminar a vos mismo.');
        }
    }

    public function render()
    {
        $users = User::all();

        return view('livewire.admin.admin', [
            'users' => $users,
        ]);
    }
}
