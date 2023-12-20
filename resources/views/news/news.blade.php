@php
    use App\Models\User;
    use Carbon\Carbon;
@endphp

@extends('layouts.main')

@section('title')
    SkyScenic | Noticias
@endsection

@section('content')
    <div class="p-3 p-lg-0">
        @if (session('success'))
            <div class="success-message bg-ultramarine py-2 rounded-pill m-4">
                <p class="text-light text-center m-0">{{ session('success') }}</p>
            </div>
        @endif
        <h2 class="text-light fs-4">Noticias</h2>
        <div class="news-container d-flex flex-column flex-sm-row flex-sm-wrap gap-3 mx-auto px-lg-0">
            @foreach ($news as $new)
                @php
                    $formattedDate = Carbon::parse($new->date)->format('d/m/Y');
                @endphp
                @php
                    $user = User::find($new->id_user);
                    $username = $user->username;
                @endphp
                <a class="new-card-container text-decoration-none" href="{{ url('noticias/' . $new->id) }}">
                    <div class="new-card d-flex flex-sm-column justify-content-between gap-2 h-100">
                        <div class="new-card-body d-flex flex-column">
                            <div class="d-flex justify-content-between">
                                <p class="text-secondary fs-6 m-0">Por: <span
                                        class="text-ultramarine">{{ $username }}</span>
                                </p>
                                <p class="text-secondary fs-6 m-0">{{ $formattedDate }}</p>
                            </div>
                            <h3 class="text-light fs-5 m-0">
                                {{ strlen($new->title) > 90 ? substr($new->title, 0, 90) . '...' : $new->title }}</h3>
                            <h4 class="text-secondary fs-6 m-0">
                                {{ strlen($new->subtitle) > 32 ? substr($new->subtitle, 0, 32) . '...' : $new->subtitle }}
                            </h4>
                        </div>
                        <div class="new-card-image">
                            <img class="w-100 h-100 object-fit-cover rounded-3"
                                src="{{ asset('uploads/news_uploads/' . $new->img_path) }}" alt="{{ $new->title }}">
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
