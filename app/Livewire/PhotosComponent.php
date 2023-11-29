<?php

namespace App\Livewire;

use App\Models\Photo;
use Livewire\Component;

class PhotosComponent extends Component
{
    public function render()
    {
        $photos = Photo::orderBy('created_at', 'desc')->get();

        return view('livewire.photos-component', [
            'photos' => $photos
        ]);
    }
}
