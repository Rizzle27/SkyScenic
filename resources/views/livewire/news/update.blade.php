<div class="mb-5">
    <h2 class="text-secondary text-center my-3 fs-3">Editar noticia</h2>
    <form class="col-10 d-flex flex-column justify-content-center mx-auto gap-4" wire:submit.prevent="update">
        @csrf
        <label class="photo-label d-flex flex-column justify-content-center position-relative" for="img_path">
            <input class="photo-input" id="img_path" type="file" accept="image/*" wire:model="img_path">

            {{-- preview de la imagen --}}

            @if ($img_path && is_string($img_path))
                <div class="photo-container w-75 d-flex justify-content-center mx-auto position-relative">
                    <img class="object-fit-cover w-100 mx-auto rounded-3"
                        src="{{ asset('uploads/news_uploads/' . $img_path) }}">
                    <div class="img-status-container" wire:loading wire:target="img_path" wire:key="img_path">
                        <img class="img-status rounded-circle" src="{{ asset('assets/icons/Spinner.gif') }}"
                            alt="Gif de carga de la foto">
                    </div>
                </div>
            @elseif ($img_path && is_object($img_path))
                <div class="photo-container w-75 d-flex justify-content-center mx-auto position-relative">
                    <img class="object-fit-cover w-100 mx-auto rounded-3" src="{{ $img_path->temporaryUrl() }}">
                    <div class="img-status-container" wire:loading wire:target="img_path" wire:key="img_path">
                        <img class="img-status rounded-circle" src="{{ asset('assets/icons/Spinner.gif') }}"
                            alt="Gif de carga de la foto">
                    </div>
                </div>
            @endif
            <div class="my-2 text-center">
                @error('img_path')
                    <p class="m-0 text-danger">{{ $message }}</p>
                @enderror
            </div>
        </label>

        <label>
            <input class="custom-fillable-input text-light w-100" id="title" name="title" type="text"
                placeholder="Título" required wire:model="title">
            @error('title')
                <p class="text-danger m-0 mt-2">{{ $message }}</p>
            @enderror
        </label>

        <label>
            <input class="custom-fillable-input text-light w-100" id="subtitle" name="subtitle" type="text"
                placeholder="Subtítulo" required wire:model="subtitle">
            @error('subtitle')
                <p class="text-danger m-0 mt-2">{{ $message }}</p>
            @enderror
        </label>

        <label>
            <textarea class="custom-fillable-textarea text-light w-100" id="body" name="body" rows="10" placeholder="Cuerpo" required wire:model="body"></textarea>
            @error('body')
                <p class="text-danger m-0 mt-2">{{ $message }}</p>
            @enderror
        </label>

        <button class="rounded-pill border-0 py-2 text-light bg-ultramarine" type="submit">
            <div class="position-relative" wire:loading wire:target="update" wire:key="update"><img
                    class="upload-loading-gif position-absolute" src="{{ asset('assets/icons/Spinner.gif') }}"
                    height="32" alt="Gif de carga del formulario"></div>Editar noticia
        </button>

        @if (session()->has('message'))
            <div class="d-flex justify-content-center border-bottom-ultramarine px-3 py-1" id="succesMessageContainer">
                <p class="text-light m-0">{{ session('message') }}</p>
            </div>
            <script>
                var successMessage = document.getElementById("succesMessageContainer");
                setTimeout(function() {
                    successMessage.classList.remove("d-flex");
                    successMessage.classList.add("d-none");
                }, 1000);
            </script>
        @endif

    </form>
</div>
