<?php

namespace App\Livewire\News;

use App\Models\NewsArticle;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $new;
    public $title;
    public $subtitle;
    public $body;
    public $date;
    public $img_path;
    public $imagePathName = null;
    public $oldImage;

    public $rules = [
        'img_path' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        'body' => 'required|string',
    ];

    public $messages = [
        'img_path.required' => 'La imagen es obligatoria.',
        'img_path.image' => 'El archivo debe ser una imagen.',
        'img_path.mimes' => 'La imagen debe ser de tipo jpeg, png, o jpg.',
        'img_path.max' => 'La imagen no puede ser más grande de 2 MB.',
        'title.required' => 'El título es obligatorio.',
        'title.string' => 'El título debe ser una cadena de texto.',
        'title.max' => 'El título no debe superar los 255 caracteres.',
        'subtitle.required' => 'El subtítulo es obligatorio.',
        'subtitle.string' => 'El subtítulo debe ser una cadena de texto.',
        'subtitle.max' => 'El subtítulo no debe superar los 255 caracteres.',
        'body.required' => 'El cuerpo de la noticia es obligatorio.',
        'body.string' => 'El cuerpo de la noticia debe ser una cadena de texto.',
    ];

    public function mount(NewsArticle $new)
    {
        $this->new = $new;
        $this->title = $new->title;
        $this->subtitle = $new->subtitle;
        $this->body = $new->body;
        $this->date = $new->date;
        $this->img_path = $new->img_path ? $new->img_path : null;
        $this->oldImage = $this->img_path;
    }

    public function validateImage()
    {
        if($this->oldImage != $this->img_path) {
            return $this->validate([
                'img_path' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
            ]);
        }
    }

    public function update()
    {
        $user = Auth::user();

        $new = $this->new;

        $imagePathName = null;

        if ($this->img_path !== null && $this->oldImage != $this->img_path) {
            $this->validateImage();
            $imagePathName = Carbon::now()->timestamp . '.' . $this->img_path->extension();
            $this->img_path->storeAs('news_uploads', $imagePathName);
        }

        $validatedData = $this->validate();

        if ($imagePathName !== null) {
            $validatedData['img_path'] = $imagePathName;
        }

        if ($user->id != $new->id_user && $user->role != "admin" && $user->role != "superadmin") {
            return redirect('noticias/' . $new->id);
        }

        $this->new->update($validatedData);

        $newUser = User::find($this->new->id_user);

        return redirect('noticias/' . $newUser->id)->with('success', 'La noticia se ha actualizado exitosamente.');
    }

    public function render()
    {
        return view('livewire.news.update');
    }
}
