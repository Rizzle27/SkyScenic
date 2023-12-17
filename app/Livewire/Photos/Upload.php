<?php

namespace App\Livewire\Photos;

use App\Models\Photo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $img_path;
    public $aircraft;
    public $airline;
    public $license_plate;
    public $location;
    public $country;
    public $date;
    public $id_user;

    public $rules = [
        'img_path' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        'aircraft' => 'required|string|max:255',
        'airline' => 'required|string|max:255',
        'license_plate' => 'required|string|max:20',
        'location' => 'required|string|max:255',
        'country' => 'required|string|max:255',
        'date' => 'required|date',
        'date' => 'required|date',
    ];

    public $messages = [
        'img_path.required' => 'La imagen es obligatoria.',
        'img_path.image' => 'El archivo debe ser una imagen.',
        'img_path.mimes' => 'La imagen debe ser de tipo jpeg, png, o jpg.',
        'img_path.max' => 'La imagen no puede ser más grande de 2 MB.',
        'aircraft.required' => 'El campo aeronave es requerido.',
        'aircraft.string' => 'El campo aeronave debe ser una cadena de caracteres.',
        'aircraft.max' => 'El campo aeronave no puede ser más largo de 255 caracteres.',
        'airline.required' => 'El campo aerolínea es requerido.',
        'airline.string' => 'El campo aerolínea debe ser una cadena de caracteres.',
        'airline.max' => 'El campo aerolínea no puede ser más largo de 255 caracteres.',
        'license_plate.required' => 'El campo matrícula es requerido.',
        'location.required' => 'El campo ubicación es requerido.',
        'location.string' => 'El campo ubicación debe ser una cadena de caracteres.',
        'location.max' => 'El campo ubicación no puede ser más largo de 255 caracteres.',
        'country.required' => 'El campo país es requerido.',
        'country.string' => 'El campo país debe ser una cadena de caracteres.',
        'country.max' => 'El campo país no puede ser más largo de 255 caracteres.',
        'date.required' => 'El campo fecha es requerido.',
        'date.date' => 'El campo fecha debe ser una fecha válida.',
    ];

    public function uploadPhoto()
    {
        $imgPathName = Carbon::now()->timestamp . '.' . $this->img_path->extension();
        $this->img_path->storeAs('photos_uploads', $imgPathName);

        $validatedData = $this->validate();

        $validatedData['img_path'] = $imgPathName;

        $validatedData['id_user'] = auth()->user()->id;

        $photo = Photo::create($validatedData);

        $photo->save();

        session()->flash('message', 'Foto subida con éxito.');

        $this->reset([
            'img_path',
            'aircraft',
            'airline',
            'license_plate',
            'location',
            'country',
            'date',
        ]);
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
