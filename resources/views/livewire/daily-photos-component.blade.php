<div class="gallery w-100">
    <button class="btn text-light" type="button" wire:click="getContent">Fotos del día</button>
    @if (isset($dailyPhotos))
        @foreach ($dailyPhotos as $photo)
            <div class="rounded-3 bg-darkgray mb-2">
                <a href="{{ url('/fotos/' . $photo->id) }}">
                    <img class="w-100 object-fit-cover rounded-3"
                        src="{{ asset('assets/images/photos/' . $photo->img_path) }}"
                        alt="{{ $photo->aircraft . ' captado en ' . $photo->location }}">
                </a>
            </div>
        @endforeach
    @endif
</div>
