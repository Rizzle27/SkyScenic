@extends('layouts.main')

@section('title')
    SkyScenic | Inicio
@endsection

@section('content')
    <section class="col-11 mx-auto py-3">
        <h1 class="bg-dark text-light sticky-top text-center py-2">Sky<span class="text-ultramarine">Scenic</span></h1>
        <div class="d-flex text-light my-2 mx-auto justify-content-evenly">
            <a href="{{ url('/') }}" class="m-0 p-1 text-decoration-none @if (request()->is('/')) text-ultramarine fw-bold @endif">Todas</a>
            <p class="m-0 p-1">Fotos del díaa</p>
        </div>
        <div class="gallery w-100 col-6">
            @foreach ($photos as $photo)
                <div class="rounded-3 bg-darkgray mb-2">
                    <a href="{{ url('/fotos/' . $photo->id) }}">
                        <img class="w-100 object-fit-cover rounded-3"
                            src="{{ asset('assets/images/photos/' . $photo->img_path) }}"
                            alt="{{ $photo->aircraft . ' captado en ' . $photo->location }}">
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    <div class="scroll-fade" />
@endsection
