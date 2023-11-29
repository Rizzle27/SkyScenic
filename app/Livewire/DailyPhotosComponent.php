<?php

namespace App\Livewire;

use App\Models\Photo;
use Livewire\Component;

class DailyPhotosComponent extends Component
{
    public $dailyPhotos;

    public function render()
    {
        return view('livewire.daily-photos-component');
    }

    public function getContent() {
        $this->dailyPhotos = Photo::inRandomOrder()->limit(5)->get();
    }
}
