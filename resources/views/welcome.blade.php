@extends('layouts.main')

@section('title')
    SkyScenic | Inicio
@endsection

@section('content')
    <section class="col-11 mx-auto py-3">
        <h1 class="bg-dark text-light sticky-top text-center py-2">Sky<span class="text-ultramarine">Scenic</span></h1>
        <div id="photosCarousel" class="carousel slide">
            <div class="d-flex text-light my-2 mx-auto justify-content-evenly">
              <button class="btn text-light" type="button" data-bs-target="#photosCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">Todos</button>
              <button class="btn text-light" type="button" data-bs-target="#photosCarousel" data-bs-slide-to="1" aria-label="Slide 2" wire:click="getContent">Fotos del día</button>
            </div>
            <div class="d-flex gap-3 carousel-inner">
              <div class="carousel-item active">
                @livewire('photos-component')
              </div>
              <div class="carousel-item">
                @livewire('daily-photos-component')
              </div>
            </div>
          </div>

    </section>
    <div class="scroll-fade" />
@endsection
