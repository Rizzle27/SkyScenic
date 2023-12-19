<?php
/** @var \MercadoPago\Resources\Preference $preference */
/** @var string $mpPublicKey */
?>

@extends('layouts.main')

@section('title')
    SkyScenic | Eliminar foto
@endsection

@section('content')
    <div class="mt-4 col-11 col-md-10 col-lg-8 mx-auto content-position mb-5 pb-5">
        <h2 class="text-light fs-4">Realizar pago</h2>
        <div>
            <div>
                <p class="text-ultramarine">Nombre:</p>
                <p class="text-light">{{ $plan->name }}</p>
            </div>
            <div>
                <p class="text-ultramarine">Precio:</p>
                <p class="text-light">${{ $plan->price }}ars</p>
            </div>
            <div>
                <p class="text-ultramarine">Límite de descargas:</p>
                <p class="text-light">{{ $plan->download_limit }}</p>
            </div>
        </div>
    </div>

    <div id="checkout"></div>

    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        const mp = new MercadoPago('<?= $mpPublicKey ?>');
        const bricksBuilder = mp.bricks().create('wallet', 'checkout', {
            initialization: {
                preferenceId: "<?= $preference->id;?>",
            },
        });
    </script>
@endsection
