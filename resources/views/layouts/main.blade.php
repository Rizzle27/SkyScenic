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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= url('styles/styles.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @livewireStyles
    <title>@yield('title')</title>
</head>

<body class="d-flex bg-customdark w-100">
    <aside class="d-none d-lg-block p-3">
        <div class="d-none d-lg-flex flex-column">
            @include('components.nav.lg-side-nav')
        </div>
    </aside>

    <div class="d-flex flex-column col-12 w-80">
        <div id="secondaryNav" class="d-flex d-lg-none py-3 position-sticky top-0 bg-customdark ">
            @include('components.nav.secondary-nav')
        </div>

        <header class="order-2 order-lg-1 py-3 bg-customdark">
            @include('components.nav.main-nav')
        </header>

        <main class="order-1 order-lg-2">
            <section class="p-lg-3">
                @yield('content')
            </section>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="<?= url('styles/styles.js') ?>"></script>
    <script src="<?= url('functions/functions.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @livewireScripts
    @stack('js')
</body>

</html>
