@extends('layouts.main')

@section('title')
    SkyScenic | {{ $user->username }}
@endsection

@section('content')
    <div id="profileContainer" class="mx-auto mt-4 p-lg-0 col-12 col-sm-10 col-xl-6">
        @if (session('success'))
            <div class="success-message bg-ultramarine py-2 rounded-pill m-4">
                <p class="text-light text-center m-0">{{ session('success') }}</p>
            </div>
        @endif
        <div class="d-flex flex-column mx-auto mb-5">
            @include('users.nav.profile')
        </div>
        <div class="swiper">
            <div class="d-flex py-3">
                <button class="w-50 btn text-light" onclick="goToSlide(0)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-grid-3x3 text-light" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v13a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5zM1.5 1a.5.5 0 0 0-.5.5V5h4V1zM5 6H1v4h4zm1 4h4V6H6zm-1 1H1v3.5a.5.5 0 0 0 .5.5H5zm1 0v4h4v-4zm5 0v4h3.5a.5.5 0 0 0 .5-.5V11zm0-1h4V6h-4zm0-5h4V1.5a.5.5 0 0 0-.5-.5H11zm-1 0V1H6v4z" />
                    </svg>
                </button>
                <div class="vr text-light"></div>
                <button class="w-50 btn text-light" onclick="goToSlide(1)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-newspaper text-light" viewBox="0 0 16 16">
                        <path
                            d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
                        <path
                            d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
                    </svg>
                </button>
            </div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide text-light px-2">
                    @include('users.nav.gallery')
                </div>
                <div class="swiper-slide text-light px-2">
                    @include('users.nav.news')
                </div>
                ...
            </div>
        </div>
    </div>
@endsection
