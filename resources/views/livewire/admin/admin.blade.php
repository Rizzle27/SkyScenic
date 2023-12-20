<div class="mb-5 col-sm-10 col-lg-8 col-xl-6 mx-auto mt-4">
    @if (session('success'))
        <div class="success-message bg-ultramarine py-2 rounded-pill m-4">
            <p class="text-light text-center m-0">{{ session('success') }}</p>
        </div>
    @endif
    @if (session('error'))
        <div class="error-message bg-danger py-2 rounded-pill m-4">
            <p class="text-light text-center m-0">{{ session('error') }}</p>
        </div>
    @endif
    <h2 class="text-ultramarine text-center mt-3 mb-5 fs-3">Admin usuarios</h2>
    <div class="d-flex flex-column gap-4 col-10 mx-auto">
        @foreach ($users as $user)
            <div class="d-flex justify-content-between text-center align-items-center">
                <div class="col-1 div-avatar-container">
                    <img class="w-100 h-100 rounded-circle object-fit-cover" src="{{ asset('uploads/avatar_uploads/' . $user->avatar) }}"
                        alt="Avatar de . {{ $user->username }}">
                </div>
                <div class="col-5 text-center text-light">
                    <p class="m-0"><a class="text-decoration-none text-ultramarine"
                            href="{{ url('usuarios/perfil/' . $user->username) }}">{{ $user->username }}</a></p>
                    @if ($user->id_subscription)
                        {{ $user->subscription->name }}
                    @endif
                </div>
                <button wire:click="changeRole({{ $user->id }})"
                    class="col-4 btn text-light rounded-pill
                @if ($user->role == 'superadmin') bg-royalepurple
                @elseif ($user->role == 'admin')
                    bg-ultramarine
                @elseif ($user->role == 'regular')
                    border-ultramarine @endif">
                    @if ($user->role == 'superadmin')
                        Superadmin
                    @elseif ($user->role == 'admin')
                        Admin
                    @elseif ($user->role == 'regular')
                        Usuario/a
                    @endif
                </button>
                <button wire:click="deleteUser({{ $user->id }})" class="col-2 btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-trash text-danger" viewBox="0 0 16 16">
                        <path
                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                        <path
                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                    </svg>
                </button>
            </div>
        @endforeach
    </div>
</div>
