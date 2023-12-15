<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PhotosController extends Controller
{
    public function index()
    {
        $photos = Photo::orderBy('created_at', 'asc')->get();
        $avatar = null;

        $topPhotos = Photo::orderBy('visit_count', 'desc')
            ->take(5)
            ->get();

        if (Auth::check()) {
            $authUser = Auth::user();

            $avatar = $authUser->avatar;
        }

        return view('welcome', [
            'photos' => $photos,
            'avatar' => $avatar,
            'topPhotos' => $topPhotos,
        ]);
    }

    public function view(int $id)
    {
        $photo = Photo::findOrFail($id);

        $photo->visit_count++;
        $photo->save();

        $userId = $photo->id_user;

        $user = User::findOrFail($userId);

        $photosByUser = $user->photos;

        $photosByUser = $photosByUser->filter(function ($item) use ($id) {
            return $item->id !== $id;
        });

        return view('photos.view', [
            'photo' => $photo,
            'user' => $user,
            'photosByUser' => $photosByUser,
        ]);
    }

    public function uploadForm()
    {
        return view('photos.upload');
    }

    public function updateForm(int $id)
    {
        $photo = Photo::findOrFail($id);

        $user = Auth::user();

        if ($user->id != $photo->id_user && $user->role != "admin" && $user->role != "superadmin") {
            return redirect('fotos/' . $photo->id);
        }

        return view('photos.update', [
            'photo' => $photo,
        ]);
    }


    public function deleteForm(int $id)
    {
        $photo = Photo::findOrFail($id);

        $user = Auth::user();

        if ($user->id != $photo->id_user && $user->role != "admin" && $user->role != "superadmin") {
            return redirect('fotos/' . $photo->id);
        }

        return view('photos.delete', [
            'photo' => $photo
        ]);
    }

    public function deleteProcess(int $id)
    {
        $photo = Photo::findOrFail($id);
        $photoUser = User::find($photo->id_user);
        $user = Auth::user();

        if ($user->id != $photo->id_user && $user->role != "admin" && $user->role != "superadmin") {
            return redirect('fotos/' . $photo->id);
        }

        $photo->delete();

        return redirect('/usuarios/perfil/' . $photoUser->username);
    }
}
