<?php

namespace App\Livewire\News;

use Livewire\Component;

class Upload extends Component
{
    public $title;
    public $subtitle;
    public $body;
    public $date;
    public $img_path;

    public function render()
    {
        return view('livewire.news.upload');
    }
}
