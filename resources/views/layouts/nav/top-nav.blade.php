@unless (request()->is('/'))
    <div class="d-flex justify-content-center align-items-center position-absolute nav-button start-0">
        <button class="bg-transparent border-0 p-0 return-button" onclick="history.back()">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="bi bi-arrow-return-left text-light" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5" />
            </svg>
        </button>
    </div>
@endunless
<h1 class="bg-dark text-light sticky-top text-center mx-auto my-0 w-100 h-100" id="skyScenicTitle">
    Sky<span class="text-ultramarine">Scenic</span></h1>
<div class="d-flex justify-content-center align-items-center position-absolute nav-button end-0">
    <button id="optionButton" class="bg-transparent border-0 p-0 option-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-gear text-light" viewBox="0 0 16 16">
            <path
                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
            <path
                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
        </svg>
    </button>
    <div id="profileNavContainer" class="slide-out-left position-fixed flex-column">
        <ul class="d-flex mx-4 flex-column align-items-start my-4 gap-4">
            <p class="text-light fw-bold fs-5 m-0">Cuenta</p>
            <li class="text-light">
                <a class="text-light text-decoration-none" href="{{ url('/usuarios/registrarse') }}">Registrar @auth otra @endauth cuenta</a>
            </li>
            @guest
            <li class="text-light">
                <a class="text-light text-decoration-none" href="{{ url('/usuarios/iniciar-sesion') }}">Iniciar sesión</a>
            </li>
            @endguest
            @auth
                <li class="text-light">
                    <a class="text-light text-decoration-none" href="{{ url('/usuarios/iniciar-sesion') }}">Cambiar cuenta</a>
                </li>
                <li class="text-light">
                    <a class="text-light text-decoration-none" href="{{ url('/usuarios/editar/' . $user->id) }}">Editar perfil</a>
                </li>
                <li class="text-light">
                    <a class="text-light text-decoration-none" href="{{ url('/usuarios/cerrar-sesion') }}">Cerrar sesión</a>
                </li>
            @endauth
        </ul>
        @auth
            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'superadmin')
                <ul class="d-flex mx-4 flex-column align-items-start my-4 gap-4">
                    <p class="text-light fw-bold fs-5 m-0">Admin</p>
                    <li class="text-light">
                        <a class="text-light text-decoration-none" href="{{ url('/usuarios/registrarse') }}">Usuarios</a>
                    </li>
                    <li class="text-light">
                        <a class="text-light text-decoration-none" href="{{ url('/usuarios/iniciar-sesion') }}">Noticias</a>
                    </li>
                </ul>
            @endif
        @endauth
    </div>
</div>
