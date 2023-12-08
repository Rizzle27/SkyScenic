@extends('layouts.main')

@section('title')
    SkyScenic | Inicio
@endsection

@section('content')
    <div class="mx-2 mb-5">
        <div id="photosCarousel" class="carousel slide">
            <div class="d-flex text-light my-2 mx-auto justify-content-evenly">
                <button class="btn text-light" type="button" data-bs-target="#photosCarousel" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="Slide 1">Todas</button>
                <button class="btn text-light" type="button" data-bs-target="#photosCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2">Fotos más vistas</button>
            </div>
            <div class="d-flex gap-3 carousel-inner">
                <div class="carousel-item active">
                    @include('photos.gallery')
                </div>
                <div class="carousel-item">
                    @include('photos.top-photos')
                </div>
            </div>
        </div>
    </div>
@endsection
