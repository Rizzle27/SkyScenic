@extends('layouts.main')

@section('title')
    SkyScenic | {{ $new->title }}
@endsection

@section('content')
<div class="d-flex flex-column mt-3 mb-4 mx-3">
        <p class="text-secondary fs-6 m-0">{{ $new->date }}</p>
        <h2 class="text-light fs-2">{{ $new->title }}</h2>
        <h3 class="text-secondary fs-5 fw-normal">{{ $new->subtitle }}</h3>
        <p class="text-light">Por: <span class="text-secondary">@</span><a class="text-decoration-none text-ultramarine" href="{{ url('usuarios/perfil/' . $user->username) }}">{{ $user->username }}</a></p>
        <img class="w-100 rounded-4 mb-3" src="{{ asset('uploads/news_uploads/' . $new->img_path) }}" alt="{{ $new->title }}">
        <p class="text-light">{{ $new->body }}</p>
    </div>
@endsection
