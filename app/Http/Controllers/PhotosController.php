<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function index()
    {
        $photos = Photo::orderBy('created_at', 'asc')->get();

        return view('welcome', [
            'photos' => $photos,
        ]);
    }

    public function view(int $id)
    {
        $photo = Photo::findOrFail($id);

        return view('photos.view', [
            'photo' => $photo,
        ]);
    }

    public function uploadForm()
    {
        return view('photos.upload');
    }
}
