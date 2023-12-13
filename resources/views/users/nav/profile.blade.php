<div class="d-flex flex-column justify-content-center align-items-center gap-3">
    <div class="position-relative">
        <img class="avatar rounded-circle object-fit-cover @if ($user->role == 'superadmin') avatar-superadmin-border
        @elseif ($user->role == 'admin')
            avatar-admin-border @endif"
            src="{{ $user->avatar == '' ? asset('assets/icons/user.svg') : asset('uploads/avatar_uploads/' . $user->avatar) }}"
            alt="Foto de {{ $user->username }}">
        <div
            class="user-date-container position-absolute rounded-pill w-100 text-center border-ultramarine border-1 bg-light">
            <p class="text-dark m-0 fw-bold">{{ $user->created_at->format('d/m/Y') }}</p>
        </div>
    </div>
    <div class="d-flex flex-column text-center">
        @if (isset($user->name) || isset($user->lastname))
            <p class="text-ultramarine fs-1 fw-bold m-0">
                @isset($user->name)
                    {{ $user->name }}
                @endisset
                @isset($user->lastname)
                    {{ $user->lastname }}
                @endisset
            </p>
            <p class="text-secondary fs-6 m-0"><span>@</span>{{ $user->username }}</p>
        @else
            <p class="text-ultramarine fs-1 fw-bold m-0"><span class="text-secondary">@</span>{{ $user->username }}
            </p>
        @endif
    </div>
</div>
