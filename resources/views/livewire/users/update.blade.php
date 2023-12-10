<div>
    @php
        // Supongamos que $model_avatar es el estado actual del modelo
        $model_avatar = obtenerModeloAvatar();

        // Supongamos que $avatar es la variable que deseas controlar
        $avatar = null;

        // Supongamos que $estado_anterior es la variable que almacena el estado anterior
        // Puedes inicializarla a null al principio o guardarla en una sesión, base de datos, etc.
        $estado_anterior = obtenerEstadoAnterior();

        // Compara el estado actual con el estado anterior
        if ($model_avatar == $estado_anterior) {
            // No hay cambios en el modelo avatar
            $src = 'hola';
        } else {
            // Hay cambios en el modelo avatar
            $avatar = null;
            $src = asset('uploads/avatar_uploads/' . $avatar);

            // Actualiza el estado anterior con el estado actual
            guardarEstadoAnterior($model_avatar);
        }
    @endphp
    <h2 class="text-secondary text-center my-3 fs-3">Editar perfil</h2>
    <form class="col-10 d-flex flex-column justify-content-center mx-auto gap-4" wire:submit.prevent="update">
        @csrf
        <label class="d-flex justify-content-center align-items-center">
            <input class="avatar-input" id="avatar" type="file" accept="image/*" wire:model="avatar">
            @error('avatar')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="avatar-status-container" wire:loading wire:target="avatar" wire:key="avatar">
                <img class="avatar-status rounded-circle" src="{{ asset('assets/icons/Spinner.gif') }}" height="40"
                    alt="Gif de carga de la foto">
            </div>

            {{-- preview del avatar --}}

            <div class="position-relative">
                @if ($avatar)
                    <div class="avatar-img-container mx-auto">
                        <img class="object-fit-cover w-100 h-100 mx-auto rounded-circle"
                            src="{{ asset('uploads/avatar_uploads/' . $avatar) }}">
                    </div>
                @else
                    <div class="border-light d-flex justify-content-center mx-auto">
                        <img class="object-fit-cover" height="140" src="{{ asset('assets/icons/user.svg') }}">
                    </div>
                @endif
                <div class="cam-icon-container bg-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                        class="bi bi-camera-fill text-light" viewBox="0 0 16 16">
                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                        <path
                            d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0" />
                    </svg>
                </div>
            </div>
        </label>

        <label>
            <input class="custom-fillable-input text-light w-100" id="username" name="username" type="text"
                placeholder="Nombre de usuario" required value="{{ old('username') }}" wire:model="username">
            @error('username')
                <p class="text-danger m-0 mt-2">{{ $message }}</p>
            @enderror
        </label>

        <label>
            <input class="custom-fillable-input text-light w-100" id="name" name="name" type="text"
                placeholder="Nombre" required value="{{ old('name') }}" wire:model.live="name">
            @error('name')
                <p class="text-danger m-0 mt-2">{{ $message }}</p>
            @enderror
        </label>

        <label>
            <input class="custom-fillable-input text-light w-100" id="lastname" name="lastname" type="text"
                placeholder="Apellido" required value="{{ old('lastname') }}" wire:model.live="lastname">
            @error('lastname')
                <p class="text-danger m-0 mt-2">{{ $message }}</p>
            @enderror
        </label>

        <p class="text-secondary">¿Ya tenés una cuenta? <a class="text-ultramarine text-decoration-none"
                href="{{ url('/usuarios/iniciar-sesion') }}">Iniciar sesion</a></p>

        <button class="rounded-pill border-0 py-2 text-light bg-ultramarine" type="submit">
            <div class="position-relative" wire:loading wire:target="signup" wire:key="signup"><img
                    class="upload-loading-gif position-absolute" src="{{ asset('assets/icons/Spinner.gif') }}"
                    height="32" alt="Gif de carga del formulario"></div>Registrarse
        </button>
    </form>
</div>
