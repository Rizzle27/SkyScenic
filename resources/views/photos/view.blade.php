@extends('layouts.main')

@section('title')
    SkyScenic | {{ $photo->aircraft }}
@endsection

@section('content')
    <div class="d-flex gap-4 mx-auto me-xl-4">
        <div class="col-12 col-xl-8 col-xxl-9">
            @if (session('error'))
                <div class="error-message bg-danger py-2 m-4 rounded-pill">
                    <p class="text-light text-center m-0">{{ session('error') }}</p>
                </div>
            @endif
            @include('components.photos.view')
            @include('components.photos.user')
            <div class="d-flex flex-column col-12 col-xl4 px-3 px-lg-0 gap-3 mb-5">
                @include('components.photos.view-gallery')
            </div>
        </div>
        <div class="photo-view-new-container col-4 col-xxl-3 d-none d-xl-flex flex-column gap-3 position-relative rounded-3 p-2">
            @include('components.news.aside-news')
        </div>
    </div>
@endsection
