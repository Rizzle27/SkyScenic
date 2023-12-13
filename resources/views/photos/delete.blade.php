@extends('layouts.main')

@section('title')
    SkyScenic | Eliminar foto
@endsection

@section('content')
    <div class="mb-5">
        <h2 class="text-secondary text-center my-3 fs-3">Eliminar foto</h2>

        <div class="col-10 d-flex flex-column justify-content-center mx-auto gap-2">
            <div class="photo-container w-75 d-flex justify-content-center mx-auto mb-3 position-relative">
                <img class="object-fit-cover w-100 mx-auto rounded-3"
                    src="{{ asset('uploads/photos_uploads/' . $photo->img_path) }}">
            </div>

            <p class="text-light border-ultramarine p-2 rounded-pill">{{ $photo->aircraft }}</p>
            <p class="text-light border-ultramarine p-2 rounded-pill">{{ $photo->airline }}</p>
            <p class="text-light border-ultramarine p-2 rounded-pill">{{ $photo->license_plate }}</p>
            <p class="text-light border-ultramarine p-2 rounded-pill">{{ $photo->country }}</p>
            <p class="text-light border-ultramarine p-2 rounded-pill">{{ $photo->location }}</p>
            <p class="text-light border-ultramarine p-2 rounded-pill">{{ $photo->date }}</p>

            <form class="col-12 mx-auto" method="POST" action="{{ url('/fotos/eliminar/' . $photo->id) }}">
                @csrf
                <button class="col-12 rounded-pill border-0 py-2 text-light bg-danger" type="submit">
                    Eliminar foto
                </button>
            </form>
        </div>

    </div>
@endsection
