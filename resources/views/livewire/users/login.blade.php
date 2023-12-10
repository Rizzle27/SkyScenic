<div>
    <h2 class="text-secondary text-center my-3 fs-3">Iniciar sesión</h2>
    <form class="col-10 d-flex flex-column justify-content-center mx-auto gap-4" wire:submit.prevent="login">
        @csrf

        <label>
            <input class="custom-fillable-input text-light w-100" id="email" name="email" type="email"
                placeholder="Correo electrónico" required value="{{ old('email') }}" wire:model="email">
            @error('email')
                <p class="text-danger m-0 mt-2">{{ $message }}</p>
            @enderror
        </label>

        <label>
            <div class="d-flex position-relative">
                <input class="custom-fillable-input text-light w-100" id="password" name="password" type="password"
                    placeholder="Contraseña (min 6 caracteres)" required wire:model="password">
                <input class="custom-show-password position-absolute end-0" type="checkbox" onclick="showPass()">
            </div>
            @error('password')
                <p class="text-danger m-0 mt-2">{{ $message }}</p>
            @enderror
        </label>

        <p class="text-secondary">¿Todavía no tenés una cuenta? <a class="text-ultramarine text-decoration-none"
                href="{{ url('/usuarios/registrarse') }}">Crear cuenta</a></p>

        <input class="rounded-pill border-0 py-2 text-light bg-ultramarine" type="submit" value="Iniciar sesión" wire:click="login">
    </form>
</div>
