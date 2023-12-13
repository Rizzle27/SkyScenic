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

<body class="d-flex flex-column bg-dark">
    <header class="order-last order-lg-first fixed-bottom">
        @include('layouts.nav.bottom-nav')
    </header>
    <section class="col-12 mx-auto pb-3">
        <div class="d-flex align-items-center py-3 bg-dark">
            @include('layouts.nav.top-nav')
        </div>
        @yield('content')
    </section>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>
