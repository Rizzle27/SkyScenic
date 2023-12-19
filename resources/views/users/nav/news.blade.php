<div class="user-gallery m-navheight">
    @if ($newsByUser->count() > 0)
        <div class="d-flex justify-content-between mx-2 mb-2">
            <h2 class="text-light fs-5 m-0">Noticias</h2>
            <p class="text-secondary fs-6 m-0">Total: {{ $newsByUser->count() }}</p>
        </div>
    @else
        <div class="d-flex justify-content-center mx-2 mb-2">
            <div class="d-flex flex-column my-5">
                <div class="null-photos-container d-flex justify-content-center mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="170" height="170" fill="currentColor"
                        class="bi bi-newspaper text-light position-absolute" viewBox="0 0 16 16">
                        <path
                            d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
                        <path
                            d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="190" height="190" fill="currentColor"
                        class="bi bi-x-lg text-danger position-absolute" viewBox="0 0 16 16">
                        <path
                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg>
                </div>
                <p class="text-light fs-4">No hay noticias disponibles</p>
            </div>
        </div>
    @endif
    @if ($newsByUser->count() > 0)
        <div class="d-flex flex-wrap">
            @foreach ($newsByUser as $new)
                <a class="col-md-6 text-decoration-none" href="{{ url('noticias/' . $new->id) }}">
                    <div
                        class="d-flex flex-md-column col-12 py-3 px-3 border-1 border-secondary border-bottom gap-2 justify-content-center">
                        <div class="order-md-2 col-8 col-md-12 d-flex flex-column">
                            <p class="fs-6 text-secondary m-0">{{ $new->date }}</p>
                            <h2 class="fs-5 text-light">{{ $new->title }}</h2>
                            <p class="d-none d-sm-block fs-6 text-light m-0">{{ $new->subtitle }}</p>
                        </div>
                        <div class="order-md-1 col-4 col-md-12 d-flex flex-column">
                            <img class="w-100 h-100 object-fit-cover rounded-4"
                                src="{{ asset('uploads/news_uploads/' . $new->img_path) }}" alt="{{ $new->title }}">
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    @endif
</div>
