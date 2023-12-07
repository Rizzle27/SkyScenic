<?php
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag $errors */

?>

@extends('layouts.main')

@section('title')
    SkyScenic | Iniciar sesión
@endsection

@section('content')
    <livewire:users.login />
@endsection
