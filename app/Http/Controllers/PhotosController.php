<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function gallery() {
        $photos = Photo::orderBy('created_at', 'desc')->get();

        return view('welcome', [
            'photos' => $photos
        ]);
    }
}
