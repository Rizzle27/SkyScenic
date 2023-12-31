<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function profile(string $username)
    {
        $user = User::where('username', $username)->firstOrFail();

        $newsByUser = $user->newsArticles;

        $photosByUser = $user->photos;

        return view('users.view', [
            'user' => $user,
            'newsByUser' => $newsByUser,
            'photosByUser' => $photosByUser,
        ]);
    }
}
