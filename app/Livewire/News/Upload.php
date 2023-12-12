<?php

namespace App\Livewire\News;

use App\Models\NewsArticle;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $body;
    public $img_path;
    public $id_user;

    public $rules = [
        'img_path' => 'required|image|mimes:jpeg,png,jpg|max:2048',
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

    public function uploadNew()
    {
        $imgPathName = Carbon::now()->timestamp . '.' . $this->img_path->extension();
        $this->img_path->storeAs('news_uploads', $imgPathName);

        $validatedData = $this->validate();

        $validatedData['img_path'] = $imgPathName;

        $validatedData['id_user'] = auth()->user()->id;

        $new = NewsArticle::create($validatedData);

        $new->save();

        session()->flash('message', 'Noticia subida con éxito');

        $this->reset([
            'img_path',
            'title',
            'subtitle',
            'body',
        ]);
    }

    public function render()
    {
        return view('livewire.news.upload');
    }
}
