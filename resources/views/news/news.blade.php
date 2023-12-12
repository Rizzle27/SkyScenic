@extends('layouts.main')

@section('title')
    SkyScenic | Noticias
@endsection

@section('content')
    <div class="mb-5">
        @foreach ($news as $new)
        <a class="text-decoration-none" href="{{ url('noticias/' . $new->id) }}">
            <div class="d-flex col-12 py-3 px-3 border-1 border-secondary border-bottom gap-2 justify-content-center">
                <div class="col-8 d-flex flex-column">
                    <p class="fs-6 text-secondary m-0">{{ $new->date }}</p>
                    <h2 class="fs-5 text-light m-0">{{ $new->title }}</h2>
                </div>
                <div class="new-img-container col-4 d-flex flex-column">
                    <img class="w-100 h-100 object-fit-cover rounded-4" src="{{ asset('uploads/news_uploads/' . $new->img_path) }}" alt="{{ $new->title }}">
                </div>
            </div>
        </a>
        @endforeach
    </div>
@endsection
