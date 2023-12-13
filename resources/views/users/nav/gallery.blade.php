<div class="user-gallery m-navheight">
    <div class="d-flex justify-content-between mx-2 mb-2">
        @if ($photosByUser->count() > 0)
            <h2 class="text-light fs-5 m-0">Pulbicaciones</h2>
            <p class="text-secondary fs-6 m-0">Total: {{ $photosByUser->count() }}</p>
        @else
            <div class="d-flex flex-column my-5">
                <div class="null-photos-container d-flex justify-content-center mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="190" height="190" fill="currentColor"
                        class="bi bi-x-lg text-light position-absolute" viewBox="0 0 16 16">
                        <path
                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="170" height="170" fill="currentColor"
                        class="bi bi-camera text-light position-absolute" viewBox="0 0 16 16">
                        <path
                            d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z" />
                        <path
                            d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0" />
                    </svg>
                </div>
                <p class="text-light fs-4">No hay publicaciones disponibles</p>
            </div>
        @endif
    </div>
    @if ($photosByUser->count() > 0)
        <div class="d-flex flex-wrap">
            @foreach ($photosByUser as $photo)
                <div class="user-gallery-card col-4">
                    <a href="{{ url('/fotos/' . $photo->id) }}">
                        <img class="object-fit-cover w-100 h-100"
                            src="{{ asset('uploads/photos_uploads/' . $photo->img_path) }}"
                            alt="{{ $photo->aircraft . ' captado en ' . $photo->location }}">
                    </a>
                </div>
            @endforeach
        </div>
    @endif
</div>
