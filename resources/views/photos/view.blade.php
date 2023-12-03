@extends('layouts.main')

@section('title')
    SkyScenic | {{ $photo->aircraft }}
@endsection

@section('content')
    <div class="col-12 mb-3">
        <img class="w-100 rounded-bottom-4" src="{{ asset('assets/images/photos/' . $photo->img_path) }}"
            alt="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}">
    </div>
    <div class="d-flex flex-column col-11 mx-auto">
        <div class="d-flex flex-column text-light gap-2 mb-3" id="featuresSection">
            <b class="fs-5">{{ $photo->aircraft }}</b>
            <p class="m-0">Foto tomada en {{ $photo->location . " " . $photo->country}}</p>
            <p class="m-0">{{ $photo->airline }}</p>
            <p class="m-0">{{ $photo->license_plate }}</p>
        </div>
        {{-- TODO: agregar alt de las imagenes y los datos de usuario --}}
        <div class="d-flex align-items-center gap-2 mb-5">
            <img class="profilePic" src="{{asset('assets/images/photos/test1.jpg')}}" alt="">
            <b class="text-light m-0">Rizzle27</b>
        </div>
    </div>
@endsection
