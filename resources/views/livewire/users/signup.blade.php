<div>
    <h2 class="text-light text-center mt-5 mb-4 fs-3">Registrar nueva cuenta</h2>
    <form class="col-10 d-flex flex-column justify-content-center mx-auto gap-4" wire:submit.prevent="signup">
        @csrf
        <div class="mx-auto">
            <label class="position-relative avatar-label text-light" for="avatar">
                <input class="avatar-input" id="avatar" type="file" accept="image/*" name="avatar"
                    wire:model="avatar">

                <img class="w-100 h-100 rounded-circle object-fit-cover" id="img_path_output"
                    src="{{ isset($avatar) ? $avatar->temporaryUrl() : asset('assets/icons/user.svg') }}"
                    alt="Foto del usuario">

                <div class="cam-icon-container position-absolute end-0 bg-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-camera-fill text-light" viewBox="0 0 16 16">
                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                        <path
                            d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0" />
                    </svg>
                </div>

                <div class="image-status text-nowrap position-absolute py-2">
                    <div wire:loading wire:target="avatar">
                        Subiendo imágen...
                    </div>

                    @error('avatar')
                        <p class="text-danger m-0 mt-2">{{ $message }}</p>
                    @enderror
                </div>

            </label>
        </div>

        <label>
            <input class="custom-fillable-input text-light w-100" id="username" name="username" type="text"
                placeholder="Nombre de usuario" required value="{{ old('username') }}" wire:model="username">
            @error('username')
                <p class="text-danger m-0 mt-2">{{ $message }}</p>
            @enderror
        </label>

        <label>
            <input class="custom-fillable-input text-light w-100" id="email" name="email" type="email"
                placeholder="Correo electrónico" required value="{{ old('email') }}" wire:model.live="email">
            @error('email')
                <p class="text-danger m-0 mt-2">{{ $message }}</p>
            @enderror
        </label>

        <label>
            <div class="d-flex position-relative">
                <input class="custom-fillable-input text-light w-100" id="password" name="password" type="password"
                    placeholder="Contraseña (min 6 caracteres)" required wire:model.live="password">
                <input class="custom-show-password position-absolute end-0" type="checkbox" onclick="showPass()">
            </div>
            @error('password')
                <p class="text-danger m-0 mt-2">{{ $message }}</p>
            @enderror
        </label>

        <label>
            <input class="custom-fillable-input text-light w-100" id="password_confirmation"
                name="password_confirmation" type="password" placeholder="Confirmar contraseña" required
                wire:model.live="password_confirmation">
            @error('password_confirmation')
                <p class="text-danger m-0 mt-2">{{ $message }}</p>
            @enderror
        </label>

        <p class="text-secondary">¿Ya tenés una cuenta? <a class="text-ultramarine text-decoration-none"
                href="{{ url('/usuarios/iniciar-sesion') }}">Iniciar sesion</a></p>

        <input class="rounded-pill border-0 py-2 text-light bg-ultramarine" type="submit" value="Crear cuenta">
    </form>
</div>
