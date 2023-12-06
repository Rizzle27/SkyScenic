<?php
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag $errors */

?>

@extends('layouts.main')

@section('title')
    SkyScenic | Registrarse
@endsection

@section('content')
    <livewire:users.signup />
@endsection
