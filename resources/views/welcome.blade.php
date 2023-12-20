@extends('layouts.main')

@section('title')
    SkyScenic | Inicio
@endsection

@section('content')
    <div class="swiper">
        <div class="d-flex d-lg-none justify-content-evenly justify-content-sm-start">
            <button class="btn text-light" onclick="goToSlide(0)">
                Todas
            </button>
            <button class="btn text-light" onclick="goToSlide(1)">
                Populares
            </button>
        </div>

        <div class="d-none d-lg-flex flex-column gap-4">
            <div>
                <h2 class="text-light fs-4">Fotos populares</h2>
                @include('components.photos.lg-top-photos')
            </div>
            <div>
                <h2 class="text-light fs-4">Todas las fotos</h2>
                @include('components.photos.gallery')
            </div>
        </div>

        <!-- Additional required wrapper -->
        <div class="d-lg-none swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide text-light px-3">
                @include('components.photos.gallery')
            </div>
            <div class="swiper-slide text-light px-3">
                @include('components.photos.top-photos')
            </div>
        </div>
    </div>
@endsection
