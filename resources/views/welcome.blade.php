@extends('layouts.main')

@section('title')
    SkyScenic | Inicio
@endsection

@section('content')
    <div class="m-0 vh-100">
        <!-- Slider main container -->
        <div class="swiper">
            <div class="d-flex justify-content-evenly py-3">
                <button class="btn text-light" onclick="goToSlide(0)">
                    Todas
                <button class="btn text-light" onclick="goToSlide(1)">
                    Populares
                </button>
            </div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide text-light px-2">
                    @include('photos.gallery')
                </div>
                <div class="swiper-slide text-light px-2">
                    @include('photos.top-photos')
                </div>
                ...
            </div>
        </div>

    </div>
@endsection
