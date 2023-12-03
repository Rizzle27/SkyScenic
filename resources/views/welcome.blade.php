@extends('layouts.main')

@section('title')
    SkyScenic | Inicio
@endsection

@section('content')
    <div class="mx-2 mb-5">
        <div id="photosCarousel" class="carousel slide">
            <div class="d-flex text-light my-2 mx-auto justify-content-evenly">
                <button class="btn text-light" type="button" data-bs-target="#photosCarousel" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="Slide 1">Todos</button>
                <button class="btn text-light" type="button" data-bs-target="#photosCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2">Fotos del día</button>
            </div>
            <div class="d-flex gap-3 carousel-inner">
                <div class="carousel-item active">
                    @include('photos.gallery')
                </div>
                <div class="carousel-item">
                </div>
            </div>
        </div>
        <div class="scroll-fade" />
    </div>
@endsection
