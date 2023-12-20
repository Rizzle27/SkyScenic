<?php
/** @var \MercadoPago\Resources\Preference $preference */
/** @var string $mpPublicKey */
?>

@extends('layouts.main')

@section('title')
    SkyScenic | Eliminar foto
@endsection

@push('js')
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        const mp = new MercadoPago('<?= $mpPublicKey ?>');
        const bricksBuilder = mp.bricks().create('wallet', 'checkout', {
            initialization: {
                preferenceId: "<?= $preference->id ?>",
            },
        });
    </script>
@endpush

@section('content')
    <div class="col-11 col-md-10 col-lg-6 mx-auto my-3">
        <div class="d-flex flex-column border-ultramarine rounded-4 p-4">
            <h2 class="text-light fs-4">Estas por comprar el <span class="text-ultramarine">Plan {{ $plan->name }}</span>
            </h2>
            <p class="text-light">Con este plan vas a poder:</p>
            <ul class="text-light list-unstyled">
                <li class="text-light"><span class="text-ultramarine fs-4">✓</span> Descargar un máximo de
                    <span class="text-ultramarine">{{ $plan->download_limit }}</span> fotos al mes.
                </li>
                <li class="text-light"><span class="text-ultramarine fs-4">✓</span> Descargar las imágenes
                    en la
                    mejor resolución.</li>
                <li class="text-light"><span class="text-ultramarine fs-4">✓</span> Utilizar las imágenes
                    para
                    uso personal o comercial.</li>
            </ul>
            <div class="d-flex flex-column flex-xl-row justify-content-between align-items-center">
                <p class="text-ultramarine fs-2 fw-bold m-0">${{ $plan->price }}<span class="fs-6 text-light">ars</span>
                </p>
                <div id="checkout"></div>
            </div>
        </div>
    </div>
@endsection
