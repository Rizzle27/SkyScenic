@extends('layouts.main')

@section('title')
    SkyScenic | Editar perfil
@endsection

@section('content')
    <livewire:users.update :user="$user" />
@endsection
