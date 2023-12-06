<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotosController extends Controller
{
    public function index()
    {
        $photos = Photo::orderBy('created_at', 'asc')->get();
        $avatar = null;

        if (Auth::check()) {
            $authUser = Auth::user();

            $avatar = $authUser->avatar;
        }

        return view('welcome', [
            'photos' => $photos,
            'avatar' => $avatar,
        ]);
    }

    public function view(int $id)
    {
        $photo = Photo::findOrFail($id);
        $photosTemp = Photo::inRandomOrder()->get();

        return view('photos.view', [
            'photo' => $photo,
            'photosTemp' => $photosTemp,
        ]);
    }

    public function uploadForm()
    {
        return view('photos.upload');
    }
}
