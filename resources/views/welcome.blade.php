@extends('layouts.main')

@section('title')
    SkyScenic | Inicio
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
        <div class="d-none d-lg-flex flex-column mb-5">
            <h2 class="text-light fs-4">Fotos populares</h2>
            <div class="lg-top-gallery">
                @foreach ($topPhotos as $photo)
                    <div class="lg-top-gallery-card mb-2">
                        <div class="lg-top-gallery-image h-100 w-100">
                            <a href="{{ url('/fotos/' . $photo->id) }}"
                                title="{{ $photo->aircraft . ' - ' . $photo->license_plate }}">
                                <img class="w-100 h-100 object-fit-cover"
                                    src="{{ asset('uploads/photos_uploads/' . $photo->img_path) }}"
                                    alt="{{ $photo->aircraft . ' captado en ' . $photo->location }}">
                            </a>
                        </div>
                        <div class="d-lg-flex flex-column justify-content-between lg-top-gallery-body bg-dark py-1 px-2">
                            <div class="d-flex justify-content-between">
                                <p class="fs-7 m-0 text-light">
                                    {{ strlen($photo->aircraft) > 28 ? substr($photo->aircraft, 0, 28) . '...' : $photo->aircraft }}
                                </p>
                                <p class="fs-7 m-0 text-light">{{ $photo->license_plate }}</p>
                            </div>
                            <div>
                                <p class="fs-7 m-0 text-light">Visitas: {{ $photo->visit_count }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Slider main container -->
        <div class="swiper">
            <div class="d-flex d-lg-none justify-content-evenly justify-content-sm-start py-3">
                <button class="btn text-light" onclick="goToSlide(0)">
                    Todas
                </button>
                <button class="btn text-light" onclick="goToSlide(1)">
                    Populares
                </button>
            </div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide text-light px-lg-0">
                    <h2 class="d-none d-lg-block text-light fs-4">Todas las fotos</h2>
                    @include('photos.gallery')
                </div>
                <div class="d-lg-none swiper-slide text-light">
                    @include('photos.top-photos')
                </div>
                ...
            </div>
        </div>

    </div>
@endsection
