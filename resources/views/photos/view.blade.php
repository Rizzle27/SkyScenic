@extends('layouts.main')

@section('title')
    SkyScenic | {{ $photo->aircraft }}
@endsection

@section('content')
    <div class="col-12 mb-3">
        <img class="w-100 rounded-bottom-4" src="{{ asset('assets/images/photos/' . $photo->img_path) }}"
            alt="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}">
    </div>
    <div class="d-flex flex-column col-11 mx-auto gap-3 mb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
                <a href="{{ url('/usuarios/perfil/' . $user->username) }}">
                    <img class="profile-pic" src="{{ $user->avatar == '' ? asset('assets/icons/user.svg') : asset('storage/' . $user->avatar) }}" alt="Foto del usuario {{ $user->username }}">
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
            <div class="container gap-4 d-flex flex-column">
                <div class="row">
                    <div class="col p-0">
                        <p class="text-ultramarine m-0 fs-5 fw-bold">Aeronave</p>
                        <p class="m-0 fs-6">{{ $photo->aircraft }}</p>
                    </div>
                    <div class="col p-0">
                        <p class="text-ultramarine m-0 fs-5 fw-bold">Aerolínea</p>
                        <p class="m-0 fs-6">{{ $photo->airline }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col p-0">
                        <p class="text-ultramarine m-0 fs-5 fw-bold">Licencia</p>
                        <p class="m-0 fs-6">{{ $photo->license_plate }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column col-11 mx-auto gap-3 mb-5">
        <div class="gallery w-100">
            @foreach ($photosByUser as $photo)
                <div class="rounded-3 bg-darkgray mb-2">
                    <a href="{{ url('/fotos/' . $photo->id) }}">
                        <img class="w-100 object-fit-cover rounded-3"
                            src="{{ asset('assets/images/photos/' . $photo->img_path) }}"
                            alt="{{ $photo->aircraft . ' captado en ' . $photo->location }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
