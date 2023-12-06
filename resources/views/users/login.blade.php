<?php
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag $errors */

?>

@extends('layouts.main')

@section('title')
    SkyScenic | Iniciar sesión
@endsection

@section('content')
    <h2 class="text-light text-center mt-3 mb-4 fs-3">Iniciar sesión</h2>
    <form class="col-10 d-flex flex-column justify-content-center mx-auto gap-4" action="{{ route('auth.login.process') }}"
        method="POST">
        @csrf
        <div class="mx-auto">
            <input class="avatar-input" id="avatar" type="file" accept="image/*" name="avatar" onchange="loadFile(event)">
            <label class="position-relative avatar-label text-light" for="avatar">

                <img class="w-100 h-100 position-absolute rounded-circle object-fit-cover" id="img_path_output"
                    src="{{ asset('assets/icons/user.svg') }}">

                <div class="cam-icon-container position-absolute end-0 bg-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-camera-fill text-light" viewBox="0 0 16 16">
                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                        <path
                            d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0" />
                    </svg>
                </div>

            </label>
        </div>

        <div>
            <label for="email" hidden></label>
            <input class="custom-fillable-input text-light w-100" id="email" type="email" name="email"
                placeholder="Correo electrónico" required value="{{ old('email') }}">
        </div>

        <div>
            <label for="password" hidden></label>
            <div class="d-flex position-relative align-items-center">
                <input class="custom-fillable-input text-light w-100" id="password" type="password" name="password"
                    placeholder="Contraseña (al menos 6 caracteres)" required>

                <input class="custom-show-password position-absolute end-0" type="checkbox" onclick="showPass()">
            </div>
        </div>

        <p class="text-secondary">¿Ya tenés una cuenta? <a class="text-ultramarine text-decoration-none"
                href="{{ url('/usuarios/iniciar-sesion') }}">Iniciar sesion</a></p>

        <input class="rounded-pill border-0 py-2 text-light bg-ultramarine" type="submit" value="Crear cuenta">

        @if (Session::has('loginError'))
            <div class="fs-6 my-3 text-center text-light w-100 rounded-pill py-1 px-3 border-warnred"
                id="loginErrorContainer">
                {{ Session::get('loginError') }}
            </div>
        @endif
    </form>
@endsection
