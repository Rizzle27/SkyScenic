@extends('layouts.main')

@section('title')
    SkyScenic | Eliminar noticia
@endsection

@section('content')
    <div class="d-flex flex-column mt-3 mx-3 m-navheight">
        <h2 class="text-secondary text-center my-3 fs-3">Eliminar noticia</h2>

        <p class="text-secondary fs-6 m-0">{{ $new->date }}</p>
        <h2 class="text-light fs-2">{{ $new->title }}</h2>
        <h3 class="text-secondary fs-5 fw-normal">{{ $new->subtitle }}</h3>
        <p class="text-light">Por: <span class="text-secondary">@</span><a class="text-decoration-none text-ultramarine"
                href="{{ url('usuarios/perfil/' . auth()->user($new->id_user)->username) }}">{{ auth()->user($new->id_user)->username }}</a></p>
        <img class="w-100 rounded-4 mb-3" src="{{ asset('uploads/news_uploads/' . $new->img_path) }}"
            alt="{{ $new->title }}">
        <p class="text-light">{{ $new->body }}</p>

        <form class="col-10 d-flex flex-column justify-content-center mx-auto gap-4" action="{{ url('/noticias/eliminar/' . $new->id) }}" method="POST">
            @csrf
            <button class="col-12 rounded-pill border-0 py-2 text-light bg-danger" type="submit">
                Eliminar noticia
            </button>
        </form>
    </div>
@endsection
