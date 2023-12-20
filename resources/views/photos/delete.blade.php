@extends('layouts.main')

@section('title')
    SkyScenic | Eliminar foto
@endsection

@section('content')
    <div class="col-10 col-sm-9 col-md-8 col-lg-9 col-xl-8 col-xxl-6 mx-auto">
        <h2 class="text-secondary text-center my-3 fs-3">Eliminar foto</h2>

        <div class="d-flex flex-column flex-lg-row justify-content-center mx-auto gap-4">
            <div class="lg-photo-label-container d-flex flex-column mx-auto gap-4 col-12 col-lg-6">
                <div class="photo-container w-100 d-flex justify-content-center mx-auto mb-3 position-relative">
                    <img class="object-fit-cover w-100 mx-auto rounded-3"
                        src="{{ asset('uploads/photos_uploads/' . $photo->img_path) }}">
                </div>
                <div>
                    <p class="m-0 d-none d-lg-block text-light text-center">¿Estás seguro que querés eliminar esta foto?</p>
                    <p class="m-0 d-none d-lg-block text-light text-center">Tené en cuenta que una vez eliminada la foto,
                        esta no puede ser recuperada.</p>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <p class="text-secondary mb-1 ms-3">Aeronave</p>
                <p class="text-light border-ultramarine p-2 rounded-pill">{{ $photo->aircraft }}</p>
                <p class="text-secondary mb-1 ms-3">Aerolínea</p>
                <p class="text-light border-ultramarine p-2 rounded-pill">{{ $photo->airline }}</p>
                <p class="text-secondary mb-1 ms-3">Licencia</p>
                <p class="text-light border-ultramarine p-2 rounded-pill">{{ $photo->license_plate }}</p>
                <p class="text-secondary mb-1 ms-3">País</p>
                <p class="text-light border-ultramarine p-2 rounded-pill">{{ $photo->country }}</p>
                <p class="text-secondary mb-1 ms-3">Locación</p>
                <p class="text-light border-ultramarine p-2 rounded-pill">{{ $photo->location }}</p>
                <p class="text-secondary mb-1 ms-3">Fecha</p>
                <p class="text-light border-ultramarine p-2 rounded-pill">{{ $photo->date }}</p>

                <form class="col-12 mx-auto" method="POST" action="{{ url('/fotos/eliminar/' . $photo->id) }}">
                    @csrf
                    <button class="col-12 rounded-pill border-0 py-2 text-light bg-danger" type="submit">
                        Eliminar foto
                    </button>
                </form>
            </div>

        </div>

    </div>
@endsection
