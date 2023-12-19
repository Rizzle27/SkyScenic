@php
    $avatar = null;

    $user = auth()->user();

    if ($user != null && $user->avatar != null) {
        $avatar = $user->avatar;
    }
@endphp


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer>
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="<?= url('styles/styles.css') ?>">

    <script src="<?= url('styles/styles.js') ?>" defer></script>

    <script src="<?= url('functions/functions.js') ?>" defer></script>

    {{-- TODO: eliminar swiper si no se usa --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @livewireStyles

    <title>@yield('title')</title>
</head>

<body class="d-flex flex-column bg-customdark">
    <header class="fixed-bottom sticky-lg-top">
        @include('layouts.nav.bottom-nav')
    </header>
    <section class="col-12 mx-auto">
        <div class="d-flex d-lg-none align-items-center py-3 bg-customdark fixed-top">
            @include('layouts.nav.top-nav')
        </div>
        <div class="nav-margin-div d-lg-none"></div>
        @yield('content')
    </section>
    <aside class="d-none d-lg-flex">
        <div class="align-items-center py-3 bg-customdark position-absolute">
            @include('layouts.nav.lg-top-nav')
        </div>
    </aside>
    <footer
        class="d-none col-12 d-lg-flex bg-ultramarine py-2 mx-auto fixed-bottom align-items-center justify-content-around">
        <div>
            <h2 class="text-light m-0">SkyScenic</h2>
        </div>
        <div>
            <p class="text-light m-0">García, Stella, Agüero | DWTA4</p>
        </div>
        <div>
            <ul class="d-flex list-unstyled gap-3 m-0">
                @include('layouts.links.home')
                @include('layouts.links.news')
            </ul>
        </div>
    </footer>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://sdk.mercadopago.com/js/v2"></script>

</body>

</html>
