<?php

namespace App\Livewire;

use App\Models\Photo;
use Livewire\Component;

class DailyPhotosComponent extends Component
{
    public function render()
    {
        $dailyPhotos = Photo::inRandomOrder()->limit(5)->get();

        return view('livewire.daily-photos-component', [
            'dailyPhotos' => $dailyPhotos,
        ]);
    }
}
