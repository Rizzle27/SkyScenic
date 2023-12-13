<li>
    @guest
        <a href="{{ url('/usuarios/registrarse') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                class="bi bi-plus-circle-fill text-light" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
            </svg>
        </a>
    @endguest
    @auth
        @if (auth()->user()->role == 'regular')
            <a href="{{ url('/fotos/subir') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                    class="bi bi-plus-circle-fill {{ request()->is('fotos/subir') ? 'text-ultramarine' : 'text-light' }}"
                    viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                </svg>
            </a>
        @elseif (auth()->user()->role == 'admin' || auth()->user()->role == 'superadmin')
            <button class="btn p-0" onclick="adminUploadShow()">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                    class="bi bi-plus-circle-fill
                    @if (request()->is('fotos/subir') || request()->is('noticias/subir'))
                        text-ultramarine
                    @else
                        text-light
                    @endif"
                    viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                </svg>
            </button>
            <div id="adminUploadOptions"
                class="admin-upload-options position-absolute d-none flex-column justify-content-around align-items-center vw-100 bg-dark rounded-top-4 slide-out-down">

                <div class="admin-upload-info d-flex justify-content-center align-items-center pb-3 pt-1">
                    <button class="btn position-absolute admin-upload-close" onclick="adminUploadHide()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-x-lg text-light" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                        </svg>
                    </button>
                    <p class="text-light m-0">¿Qué tipo de contenido querés subir?</p>
                </div>

                <div class="d-flex gap-5">
                    <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                        <a class="bg-light rounded-circle p-3" href="{{ url('/fotos/subir') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                class="bi bi-image text-dark" viewBox="0 0 16 16">
                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                <path
                                    d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12" />
                            </svg>
                        </a>
                        <p class="text-light fw-bold m-0">Foto</p>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                        <a class="bg-light rounded-circle p-3" href="{{ url('/noticias/subir') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                class="bi bi-newspaper text-dark" viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
                                <path
                                    d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
                            </svg>
                        </a>
                        <p class="text-light fw-bold m-0">Noticia</p>
                    </div>
                </div>
            </div>
        @endif
    @endauth
</li>
