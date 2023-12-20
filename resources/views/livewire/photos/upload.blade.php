<div class="col-10 col-sm-9 col-md-8 col-lg-9 col-xl-8 col-xxl-6 mx-auto">
    <h2 class="text-secondary text-center my-3 fs-3">Subir una foto</h2>
    <form class="d-flex flex-column flex-lg-row justify-content-center mx-auto gap-4" wire:submit.prevent="uploadPhoto">
        @csrf
        <div class="lg-photo-label-container d-flex flex-column mx-auto gap-4 col-12 col-lg-6">
            <label class="photo-label d-flex flex-column justify-content-center position-relative" for="img_path">
                <input class="photo-input" id="img_path" type="file" accept="image/*" wire:model="img_path">

                {{-- preview de la imagen --}}

                @if ($img_path)
                    <div class="photo-container w-100 d-flex justify-content-center mx-auto position-relative">
                        <img class="object-fit-cover w-100 mx-auto rounded-3" src="{{ $img_path->temporaryUrl() }}">
                        <div class="img-status-container" wire:loading wire:target="img_path" wire:key="img_path">
                            <img class="img-status rounded-circle" src="{{ asset('assets/icons/Spinner.gif') }}"
                                alt="Gif de carga de la foto">
                        </div>
                    </div>
                @else
                    <div class="photo-container photo-svg-border border-light rounded-4 d-flex justify-content-center mx-auto">
                        <img class="photo-svg" src="{{ asset('assets/icons/photo.svg') }}">
                    </div>
                @endif
                <div class="my-2 text-center">
                    @error('img_path')
                        <p class="m-0 text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </label>
            <div>
                <p class="m-0 d-none d-lg-block text-light text-center">Subí tu foto haciendo click en el recuadro de arriba.</p>
                <p class="m-0 text-light text-center">Recordá utilizar imágenes menores a 2MB en uno de los siguientes formatos: png, jpg, jpeg, webp.</p>
            </div>
        </div>

        <div class="d-flex flex-column justify-content-start mx-auto gap-4 col-12 col-lg-6">
            <label>
                <input class="custom-fillable-input text-light w-100" id="aircraft" name="aircraft" type="text"
                    placeholder="Aeronave" required wire:model="aircraft" wire:keydown="handleAircraftKeydown">
                @error('aircraft')
                    <p class="text-danger m-0 mt-2">{{ $message }}</p>
                @enderror

                @if (count($aircraftSearchResults) > 0)
                    <ul class="search-results text-light list-unstyled d-flex flex-column p-2 mt-2 mb-0">
                        @foreach ($aircraftSearchResults as $result)
                            <li class="py-2" wire:click="selectAircraftResult('{{ $result }}')">{{ $result }}</li>
                        @endforeach
                    </ul>
                @endif
            </label>

            <label>
                <input class="custom-fillable-input text-light w-100" id="airline" name="airline" type="text"
                    placeholder="Aerolínea" required wire:model="airline" wire:keydown="handleAirlineKeydown">
                @error('airline')
                    <p class="text-danger m-0 mt-2">{{ $message }}</p>
                @enderror

                @if (count($airlineSearchResults) > 0)
                    <ul class="search-results text-light list-unstyled d-flex flex-column p-2 mt-2 mb-0">
                        @foreach ($airlineSearchResults as $result)
                            <li class="py-2" wire:click="selectAirlineResult('{{ $result }}')">{{ $result }}</li>
                        @endforeach
                    </ul>
                @endif
            </label>

            <label>
                <input class="custom-fillable-input text-light w-100" id="license_plate" name="license_plate" type="text"
                    placeholder="Licencia" required wire:model="license_plate">
                @error('license_plate')
                    <p class="text-danger m-0 mt-2">{{ $message }}</p>
                @enderror
            </label>

            <label>
                <input class="custom-fillable-input text-light w-100" id="country" name="country" type="text"
                    placeholder="País de la foto" required wire:model="country">
                @error('country')
                    <p class="text-danger m-0 mt-2">{{ $message }}</p>
                @enderror
            </label>

            <label>
                <input class="custom-fillable-input text-light w-100" id="location" name="location" type="text"
                    placeholder="Locación de la foto" required wire:model="location">
                @error('location')
                    <p class="text-danger m-0 mt-2">{{ $message }}</p>
                @enderror
            </label>

            <label>
                <input class="custom-fillable-input text-light w-100" id="date" name="date" type="date" required
                    wire:model="date">
                @error('date')
                    <p class="text-danger m-0 mt-2">{{ $message }}</p>
                @enderror
            </label>

            <button class="rounded-pill border-0 py-2 text-light bg-ultramarine" type="submit">
                <div class="position-relative" wire:loading wire:target="uploadPhoto" wire:key="uploadPhoto"><img
                        class="upload-loading-gif position-absolute" src="{{ asset('assets/icons/Spinner.gif') }}"
                        height="32" alt="Gif de carga del formulario"></div>Subir foto
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
        </div>

    </form>
</div>
