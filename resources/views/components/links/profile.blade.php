<li class="order-lg-5">
    @guest
        <a class="d-lg-none text-decoration-none" href="{{ url('/usuarios/registrarse') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                class="d-lg-none bi bi-person-circle
                @if (request()->is('usuarios/iniciar-sesion') || request()->is('usuarios/registrarse'))
                    text-ultramarine
                @else
                    text-light
                @endif" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
            </svg>
        </a>
    @endguest
    @auth
        <a class="profile-link text-decoration-none px-lg-2 py-lg-1" href="{{ url('/usuarios/perfil/' . $user->username) }}">
            <p class="d-none d-lg-block text-light m-0">{{ $user->username }}</p>
            <img class="avatar-thumbnail object-fit-cover rounded-circle"
                src="{{ $avatar == '' ? asset('assets/icons/user.svg') : asset('uploads/avatar_uploads/' . $avatar) }}"
                alt="Foto de perfil">
        </a>
    @endauth
</li>
