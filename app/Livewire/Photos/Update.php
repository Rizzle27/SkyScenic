<?php

namespace App\Livewire\Photos;

use App\Models\Photo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class Update extends Component
{
    use WithFileUploads;

    public $photo;
    public $aircraft;
    public $airline;
    public $license_plate;
    public $country;
    public $location;
    public $date;
    public $img_path;
    public $imagePathName = null;
    public $oldImage;

    protected $rules = [
        'aircraft' => 'required',
        'airline' => 'required',
        'license_plate' => 'required',
        'country' => 'required',
        'location' => 'required',
        'date' => 'required',
    ];

    protected $messages = [
        'img_path.required' => 'La imagen es requerida.',
        'img_path.image' => 'El archivo debe ser una imagen.',
        'img_path.max' => 'La imagen no puede ser más grande de 2 MB.',
        'aircraft.required' => 'El nombre de la aeronave es requerido.',
        'airline.required' => 'El nombre de la aerolínea es requerido.',
        'license_plate.required' => 'La licencia es requerida.',
        'country.required' => 'El país de la foto requerido.',
        'location.required' => 'La ubicación de la foto es requerida.',
        'date.required' => 'La fecha de la foto es requerida.',
    ];

    public function mount(Photo $photo)
    {
        $this->photo = $photo;
        $this->aircraft = $photo->aircraft;
        $this->airline = $photo->airline;
        $this->license_plate = $photo->license_plate;
        $this->country = $photo->country;
        $this->location = $photo->location;
        $this->date = $photo->date;
        $this->img_path = $photo->img_path ? $photo->img_path : null;
        $this->oldImage = $this->img_path;
    }

    public function validateImage()
    {
        if($this->oldImage != $this->img_path) {
            return $this->validate([
                'img_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        }
    }

    public function update()
    {
        $user = Auth::user();

        $photo = $this->photo;

        $imagePathName = null;

        if ($this->img_path !== null && $this->oldImage != $this->img_path) {
            $this->validateImage();
            $imagePathName = Carbon::now()->timestamp . '.' . $this->img_path->extension();
            $this->img_path->storeAs('photos_uploads', $imagePathName);
        }

        $validatedData = $this->validate();

        if ($imagePathName !== null) {
            $validatedData['img_path'] = $imagePathName;
        }

        if ($user->id != $photo->id_user && $user->role != "admin" && $user->role != "superadmin") {
            return redirect('fotos/' . $photo->id);
        }

        $this->photo->update($validatedData);

        $photoUser = User::find($this->photo->id_user);

        return redirect('/usuarios/perfil/' . $photoUser->username);
    }

    public function render()
    {
        return view('livewire.photos.update');
    }
}
