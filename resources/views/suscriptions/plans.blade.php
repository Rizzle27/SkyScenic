@extends('layouts.main')

@section('title')
    SkyScenic | Suscripciones
@endsection

@section('content')
    <div class="d-flex flex-column justify-content-lg-center col-10 mx-auto mt-5 m-navheight gap-4">
        <div class="d-flex flex-column gap-4">
            <h2 class="text-ultramarine">Obtené la licencia de las mejores imágenes para usarlas a tu gusto.</h2>
            <p class="text-light">Las fotografías de este sitio están bajo derechos de autor. Si te interesa, ¡estas
                suscripciones son para que puedas utilizarlas a tu gusto!</p>
        </div>
        <div class="d-flex flex-column gap-4">
            @foreach ($subscriptions as $subscription)
                <div class="border-ultramarine rounded-5">
                    @if ($subscription->id === optional($subscriptionWithMostUsers)->id)
                        <div class="d-flex align-items-center gap-2 col-12 border-bottom-ultramarine py-2 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-stars text-ultramarine" viewBox="0 0 16 16">
                                <path
                                    d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                            </svg>
                            <p class="text-light fs-5 m-0">¡Plan con más suscripciones!</p>
                        </div>
                    @endif
                    <div class="d-flex flex-column p-4">
                        <h3 class="text-ultramarine">Suscripción de {{ $subscription->name }}</h3>
                        <p class="text-light">Con esta suscripción vas a poder:</p>
                        <ul class="list-unstyled">
                            <li class="text-light"><span class="text-ultramarine fs-4">✓</span> Descargar un máximo de
                                <span class="text-ultramarine">{{ $subscription->download_limit }}</span> fotos al mes.
                            </li>
                            <li class="text-light"><span class="text-ultramarine fs-4">✓</span> Descargar las imágenes
                                en la
                                mejor resolución.</li>
                            <li class="text-light"><span class="text-ultramarine fs-4">✓</span> Utilizar las imágenes
                                para
                                uso personal o comercial.</li>
                        </ul>
                        <div class="d-flex justify-content-between align-items-center">
                            <b class="text-ultramarine fw-bold fs-2">{{ $subscription->price }} <span
                                    class="fs-6 text-light">ars</span></b>
                            <a class="btn bg-ultramarine text-light rounded-pill"
                                href="{{ url('suscripciones/suscribirse/' . $subscription->id) }}">Comprar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
