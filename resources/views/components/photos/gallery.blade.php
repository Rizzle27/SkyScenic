{{-- Gallery Include --}}
<div class="gallery">
    @foreach ($photos as $photo)
        <div class="gallery-card rounded-3 bg-darkgray mb-2">
            <div class="gallery-card-image">
                <a href="{{ url('/fotos/' . $photo->id) }}"
                    title="{{ $photo->aircraft . ' - ' . $photo->license_plate }}">
                    <img class="w-100 object-fit-cover rounded-3"
                        src="{{ asset('uploads/photos_uploads/' . $photo->img_path) }}"
                        alt="{{ $photo->aircraft . ' captado en ' . $photo->location }}">
                </a>
            </div>
            <div class="d-none d-lg-flex flex-column justify-content-between gallery-card-body bg-dark py-1 px-2">
                <div class="d-flex justify-content-between">
                    <p class="fs-7 m-0 text-light">
                        {{ strlen($photo->aircraft) > 21 ? substr($photo->aircraft, 0, 21) . '...' : $photo->aircraft }}
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
