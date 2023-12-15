<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NewsArticle;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NewsArticlesController extends Controller
{
    public function news() {
        $news = NewsArticle::all();

        return view('news.news', [
            'news' => $news
        ]);
    }

    public function view(int $id) {
        $new = NewsArticle::findOrFail($id);
        $userId = $new->id_user;

        $user = User::findOrFail($userId);

        return view('news.view', [
            'new' => $new,
            'user' => $user
        ]);
    }

    public function uploadForm() {
        if (Auth::user()->role == "regular") {
            return redirect('/');
        }

        return view('news.upload');
    }

    public function updateForm(int $id) {
        $new = NewsArticle::findOrFail($id);

        $user = Auth::user($new->id_user);

        if ($user->id != $new->id_user && $user->role != "admin" && $user->role != "superadmin") {
            return redirect('noticias/' . $new->id);
        }

        return view('news.update', [
            'new' => $new,
        ]);
    }

    public function deleteForm(int $id) {
        $new = NewsArticle::findOrFail($id);

        $user = Auth::user($new->id_user);

        if ($user->id != $new->id_user && $user->role != "admin" && $user->role != "superadmin") {
            return redirect('noticias/' . $new->id);
        }

        return view('news.delete', [
            'new' => $new,
        ]);
    }

    public function deleteProcess(int $id)
    {
        $new = NewsArticle::findOrFail($id);
        $newUser = User::find($new->id_user);
        $user = Auth::user();

        if ($user->id != $new->id_user && $user->role != "admin" && $user->role != "superadmin") {
            return redirect('noticias/' . $new->id);
        }

        $new->delete();

        return redirect('/usuarios/perfil/' . $newUser->username);
    }
}
