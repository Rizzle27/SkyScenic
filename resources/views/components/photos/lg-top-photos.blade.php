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
                        {{ strlen($photo->aircraft) > 18 ? substr($photo->aircraft, 0, 18) . '...' : $photo->aircraft }}
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
