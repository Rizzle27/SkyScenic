<?php

namespace App\Livewire\Photos;

use App\Models\Photo;
use Livewire\Component;

class Upload extends Component
{
    public $img_path;
    public $aircraft;
    public $airline;
    public $license_plate;
    public $location;
    public $country;
    public $date;

    public function render()
    {
        return view('livewire.photos.upload');
    }

    public function save()
    {
        $validated = $this->validate([
            'img_path' => 'required|image|mimes:png,jpg,jpeg,webp|max:2048',
            'aircraft' => 'required',
            'airline' => 'required',
            'license_plate' => 'required',
            'location' => 'required',
            'country' => 'required',
            'date' => 'required',
        ]);

        Photo::create($validated);

        return redirect()->to('/fotos/subir');
    }


    // Funciones para mostrar opciones en los inputs
    // variables de resultados
    public $aircraftSearchResults = [];
    public $airlineSearchResults = [];

    // funciones para convertir en array las opciones
    public function updatedAircraft($query)
    {
        $this->aircraftSearchResults = Photo::where('aircraft', 'like', '%' . $query . '%')->pluck('aircraft')->toArray();
    }
    public function updatedAirline($query)
    {
        $this->airlineSearchResults = Photo::where('airline', 'like', '%' . $query . '%')->pluck('airline')->toArray();
    }

    // seleccion de resultados
    public function selectAircraftResult($result)
    {
        $this->aircraft = $result;
        $this->aircraftSearchResults = [];
    }
    public function selectAirlineResult($result)
    {
        $this->airline = $result;
        $this->airlineSearchResults = [];
    }

    // handleKeyDowns
    public function handleAircraftKeydown()
    {
        $this->aircraftSearchResults = Photo::where('aircraft', 'like', '%' . $this->aircraft . '%')->pluck('aircraft')->toArray();
    }
    public function handleAirlineKeydown()
    {
        $this->airlineSearchResults = Photo::where('airline', 'like', '%' . $this->airline . '%')->pluck('airline')->toArray();
    }
}
