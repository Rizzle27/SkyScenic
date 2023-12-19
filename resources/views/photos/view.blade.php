@extends('layouts.main')

@section('title')
    SkyScenic | {{ $photo->aircraft }}
@endsection

@section('content')
    <div class="col-11 col-lg-8 mx-auto my-3 content-position">
        <div class="col-lg-8 mx-auto">
            @if (session('error'))
                <div class="error-message bg-danger py-2 m-4 rounded-pill">
                    <p class="text-light text-center m-0">{{ session('error') }}</p>
                </div>
            @endif
            <div class="position-relative">
                @auth
                    @if ($photo->id_user == auth()->user()->id || auth()->user()->role == 'admin' || auth()->user()->role == 'superadmin')
                        <div class="photo-options-container d-flex flex-row position-absolute gap-2">
                            <a class="photo-options p-1 rounded-circle" href="{{ url('fotos/editar/' . $photo->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-fill text-light" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </a>
                            <a class="photo-options p-1 rounded-circle" href="{{ url('fotos/eliminar/' . $photo->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash-fill text-danger" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                </svg>
                            </a>
                        </div>
                    @endif
                @endauth
                @auth
                    @if (auth()->user()->id_subscription != null && $photo->id_user != auth()->user()->id)
                        <a href="{{ url('descargar-foto/' . $photo->img_path) }}"
                            class="d-flex justify-content-center align-items-center photo-download-container btn p-2 position-absolute bg-ultramarine rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-download text-light" viewBox="0 0 16 16">
                                <path
                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                <path
                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg>
                        </a>
                    @endif
                @endauth
                <img class="col-12 rounded-bottom-4 m-0" src="{{ asset('uploads/photos_uploads/' . $photo->img_path) }}"
                    alt="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}">
            </div>
            <div class="d-flex flex-column col-11 col-lg-12 mx-auto gap-3 mb-2 mt-4 mt-lg-4">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                        <a href="{{ url('/usuarios/perfil/' . $user->username) }}">
                            <img class="profile-pic"
                                src="{{ $user->avatar == '' ? asset('assets/icons/user.svg') : asset('uploads/avatar_uploads/' . $user->avatar) }}"
                                alt="Foto de {{ $user->username }}">
                        </a>
                        <b class="text-light m-0"><span class="text-secondary">@</span>{{ $user->username }}</b>
                    </div>
                    <div>
                        <p class="text-secondary m-0 fw-normal">{{ $photo->date }}</p>
                    </div>
                </div>
                <div class="d-flex flex-column text-light gap-4 mb-3" id="featuresSection">
                    <div class="d-flex align-items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt text-ultramarine mt-1" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                        <div class="d-flex flex-column">
                            <p class="m-0 fs-6">{{ $photo->location }}</p>
                            <p class="m-0 fs-6">{{ $photo->country }}</p>
                        </div>
                    </div>
                    <div class="container gap-4 d-flex flex-column mx-0">
                        <div class="d-flex gap-5 row">
                            <div class="col p-0">
                                <p class="text-ultramarine m-0 fs-5 fw-bold">Aeronave</p>
                                <p class="m-0 fs-6">{{ $photo->aircraft }}</p>
                            </div>
                            <div class="col p-0">
                                <p class="text-ultramarine m-0 fs-5 fw-bold">Aerolínea</p>
                                <p class="m-0 fs-6">{{ $photo->airline }}</p>
                            </div>
                        </div>
                        <div class="d-flex gap-5 row">
                            <div class="col p-0">
                                <p class="text-ultramarine m-0 fs-5 fw-bold">Licencia</p>
                                <p class="m-0 fs-6">{{ $photo->license_plate }}</p>
                            </div>
                            <div class="col p-0">
                                <p class="text-ultramarine m-0 fs-5 fw-bold">Visitas</p>
                                <p class="m-0 fs-6">{{ $photo->visit_count }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column col-11 col-lg-12 mx-auto gap-3 mb-5">
                @include('photos.gallery')
            </div>
        </div>
    </div>
@endsection
