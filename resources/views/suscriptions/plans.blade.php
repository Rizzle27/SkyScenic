@php
    use App\Models\Subscription;

    if (auth()->user()->id_subscription != null) {
        $planId = auth()->user()->id_subscription;

        $plan = Subscription::findOrFail($planId);
    }
@endphp

@extends('layouts.main')

@section('title')
    SkyScenic | Suscripciones
@endsection

@section('content')
    <div class="mt-4 col-11 col-md-10 col-lg-8 mx-auto content-position mb-5 pb-5">
        @if (session('success'))
            <div class="success-message bg-ultramarine py-2 m-4 rounded-pill">
                <p class="text-light text-center m-0">{{ session('success') }}</p>
            </div>
        @endif
        @if (auth()->user()->id_subscription == null)
            <div class="d-flex flex-column">
                <h2 class="text-light fs-4">Obtené la licencia de las mejores imágenes para usarlas a tu gusto.</h2>
                <p class="text-light mb-5">Las fotografías de este sitio están bajo derechos de autor. Si te interesa, ¡estas
                    suscripciones son para que puedas utilizarlas a tu gusto!</p>
            </div>
            <div class="d-flex flex-column flex-xl-row gap-4">
                @foreach ($subscriptions as $subscription)
                    <div class="d-flex flex-column border-ultramarine rounded-5">
                        @if ($subscription->id === optional($subscriptionWithMostUsers)->id)
                            <div class="top-plan order-xl-2 d-flex align-items-center gap-2 col-12 py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="bi bi-stars text-ultramarine" viewBox="0 0 16 16">
                                    <path
                                        d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                                </svg>
                                <p class="text-light fs-5 m-0">¡Plan con más suscripciones!</p>
                            </div>
                        @endif
                        <div class="order-xl-1 d-flex flex-column p-4">
                            <h3 class="text-ultramarine">{{ $subscription->name }}</h3>
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
                                <b class="text-ultramarine fw-bold fs-2">{{ $subscription->price }}<span
                                        class="fs-6 text-light">ars</span></b>
                                <a class="btn bg-ultramarine text-light rounded-pill"
                                    href="{{ url('suscripciones/pago/' . $subscription->id) }}">Comprar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="d-flex flex-column">
                <h2 class="text-light fs-4">¡<span class="text-ultramarine">{{ auth()->user()->username }}</span>, ya estás
                    suscrito!</h2>
                <p class="text-light mb-5">Desde <b>SkyScenic</b> agradecemos profundamente que te hayas decidido a
                    contratar el
                    servicio de nuestro plan <span class="text-ultramarine">{{ $plan->name }}</span> desde el <span class="text-ultramarine">{{ auth()->user()->sub_start }}</span> hasta el <span class="text-ultramarine">{{ auth()->user()->sub_end }}</span>. Si tenés dudas sobre
                    este plan, a continuación te dejamos todos los planes disponibles para que cambies al que mejor se
                    adapte
                    a tus necesidades.</p>
            </div>
            <div class="d-flex flex-column flex-xl-row gap-4">
                @foreach ($subscriptions as $subscription)
                    <div class="d-flex flex-column border-ultramarine rounded-5">
                        @if ($subscription->id === optional($subscriptionWithMostUsers)->id)
                            <div class="top-plan order-xl-2 d-flex align-items-center gap-2 col-12 py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="bi bi-stars text-ultramarine" viewBox="0 0 16 16">
                                    <path
                                        d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                                </svg>
                                <p class="text-light fs-5 m-0">¡Plan con más suscripciones!</p>
                            </div>
                        @endif
                        <div class="order-xl-1 d-flex flex-column p-4">
                            <h3 class="text-ultramarine">{{ $subscription->name }}</h3>
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
                                <b class="text-ultramarine fw-bold fs-2">{{ $subscription->price }}<span
                                        class="fs-6 text-light">ars</span></b>
                                <a class="btn bg-ultramarine text-light rounded-pill"
                                    href="{{ url('suscripciones/pago/' . $subscription->id) }}">Comprar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex flex-column mt-4 text-center gap-2">
                <p class="fs-5 text-light m-0">¿Ya no necesitas nuestros servicios?</p>
                <form action="{{ url('suscripciones/cancelar/' . auth()->user()->id) }}" method="POST">
                    @csrf
                    <button class="bg-danger rounded-pill btn text-light" type="submit">Cancelar suscripción</button>
                </form>
            </div>
        @endif
    </div>
@endsection
