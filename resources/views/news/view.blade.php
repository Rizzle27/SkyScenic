@extends('layouts.main')

@section('title')
    SkyScenic | {{ $new->title }}
@endsection

@section('content')
    <div class="col-11 col-lg-8 mx-auto my-3 content-position">
            @if (session('success'))
                <div class="success-message bg-ultramarine py-2 rounded-pill m-4">
                    <p class="text-light text-center m-0">{{ session('success') }}</p>
                </div>
            @endif
            @if (session('error'))
                <div class="error-message bg-danger py-2 rounded-pill m-4">
                    <p class="text-light text-center m-0">{{ session('error') }}</p>
                </div>
            @endif
            @auth
                @if ($new->id_user == auth()->user()->id || auth()->user()->role == 'admin' || auth()->user()->role == 'superadmin')
                    <div class="d-flex gap-2">
                        <a class="p-1 rounded-circle" href="{{ url('noticias/editar/' . $new->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-fill text-light" viewBox="0 0 16 16">
                                <path
                                    d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                            </svg>
                        </a>
                        <a class="p-1 rounded-circle" href="{{ url('noticias/eliminar/' . $new->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash-fill text-danger" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                            </svg>
                        </a>
                    </div>
                @endif
            @endauth
            <div class="d-flex flex-column">
                <p class="text-secondary fs-6 m-0">{{ $new->date }}</p>
                <h2 class="text-light fs-2">{{ $new->title }}</h2>
                <h3 class="text-secondary fs-5 fw-normal">{{ $new->subtitle }}</h3>
                <p class="text-light">Por: <span class="text-secondary">@</span><a class="text-decoration-none text-ultramarine"
                        href="{{ url('usuarios/perfil/' . $user->username) }}">{{ $user->username }}</a></p>
                <img class="col-12 col-lg-6 rounded-4 mb-3" src="{{ asset('uploads/news_uploads/' . $new->img_path) }}"
                    alt="{{ $new->title }}">
                <p class="text-light m-navheight">{{ $new->body }}</p>
            </div>
    </div>
@endsection
