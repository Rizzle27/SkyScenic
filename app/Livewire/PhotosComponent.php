<?php

namespace App\Livewire;

use App\Models\Photo;
use Livewire\Component;

class PhotosComponent extends Component
{
    public function render()
    {
        $photos = Photo::inRandomOrder()->get();

        return view('livewire.photos-component', [
            'photos' => $photos
        ]);
    }
}
