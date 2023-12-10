<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsArticlesController extends Controller
{
    public function uploadForm() {
        return view('news.upload');
    }
}
