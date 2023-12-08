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
}
