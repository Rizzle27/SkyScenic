<div>
    <h2 class="text-secondary text-center my-3 fs-3">Iniciar sesión</h2>
    <form class="col-10 d-flex flex-column justify-content-center mx-auto gap-4" wire:submit.prevent="login">
        @csrf

        <label>
            <input class="custom-fillable-input text-light w-100" id="email" name="email" type="email"
                placeholder="Correo electrónico" required value="{{ old('email') }}" wire:model="email">
        </label>

        <label>
            <div class="d-flex align-items-center position-relative">
                <input class="custom-fillable-input text-light w-100" id="password" name="password" type="password"
                    placeholder="Contraseña (min 6 caracteres)" required wire:model="password">
                <input class="custom-show-password position-absolute end-0" type="checkbox" onclick="showPass()">
            </div>
        </label>

        @if (session('error'))
            <p class="text-danger m-0">{{ session('error') }}</p>
        @endif

        <p class="text-secondary">¿Todavía no tenés una cuenta? <a class="text-ultramarine text-decoration-none"
                href="{{ url('/usuarios/registrarse') }}">Crear cuenta</a></p>

        <button class="rounded-pill border-0 py-2 text-light bg-ultramarine" type="submit">
            <div class="position-relative" wire:loading wire:target="login" wire:key="login"><img
                    class="upload-loading-gif position-absolute" src="{{ asset('assets/icons/Spinner.gif') }}"
                    height="32" alt="Gif de carga del formulario"></div>Iniciar sesión
        </button>
    </form>
</div>
