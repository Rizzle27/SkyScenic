@extends('layouts.main')

@section('title')
    SkyScenic | Inicio
@endsection

@section('content')
    <div class="m-0 vh-100">
        <!-- Slider main container -->
        <div class="swiper">
            <div class="d-flex justify-content-evenly py-2">
                <button class="btn text-light">Todas</button>
                <button class="btn text-light">Populares</button>
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
