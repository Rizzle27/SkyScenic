<h1 class="m-0"><a class="text-light text-decoration-none" href="{{ url('/') }}">Sky<span
            class="text-ultramarine">Scenic</span></a></h1>
<div class="my-3">
    <p class="text-light mb-2 fs-5 fw-bold">Acciones</p>
    <ul class="d-flex flex-column ms-2 gap-3 p-0 list-unstyled">
        @include('components.aside-links.actions.upload-photo')
        @include('components.aside-links.actions.upload-new')
    </ul>
    <p class="text-light mb-2 fs-5 fw-bold">Cuenta</p>
    <ul class="d-flex flex-column ms-2 gap-3 p-0 list-unstyled">
        @include('components.aside-links.account.signup')
        @include('components.aside-links.account.login')
        @auth
            @include('components.aside-links.account.re-login')
            @include('components.aside-links.account.edit')
            @include('components.aside-links.account.logout')
        @endauth
    </ul>
    @auth
        @if (auth()->user()->role == 'admin' || auth()->user()->role == 'superadmin')
            <p class="text-light mb-2 fs-5 fw-bold">Admin</p>
            <ul class="d-flex flex-column ms-2 gap-3 p-0 list-unstyled">
                @include('components.aside-links.admin.users')
            </ul>
        @endif
    @endauth
</div>
