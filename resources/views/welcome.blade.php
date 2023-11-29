@extends('layouts.main')

@section('title')
    SkyScenic | Inicio
@endsection

@section('content')
    <section class="col-11 mx-auto py-3">
        <h1 class="bg-dark text-light sticky-top text-center py-2">Sky<span class="text-ultramarine">Scenic</span></h1>
        <div class="d-flex text-light my-2 mx-auto justify-content-evenly">
            <a href="{{ url('/') }}"
                class="m-0 p-1 text-decoration-none @if (request()->is('/')) text-ultramarine fw-bold @endif">Todas</a>
                @livewire('daily-photos-component')
        </div>

        @livewire('photos-component')

    </section>
    <div class="scroll-fade" />
@endsection
