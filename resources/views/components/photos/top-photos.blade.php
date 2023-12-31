{{-- Top Photos Include --}}
<div class="w-100">
    @foreach ($topPhotos as $photo)
        <div class="rounded-3 bg-darkgray mb-2">
            <a href="{{ url('/fotos/' . $photo->id) }}">
                <img class="w-100 object-fit-cover rounded-3"
                    src="{{ asset('uploads/photos_uploads/' . $photo->img_path) }}"
                    alt="{{ $photo->aircraft . ' captado en ' . $photo->location }}">
            </a>
        </div>
    @endforeach
</div>
