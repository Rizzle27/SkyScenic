@extends('layouts.main')

@section('title')
    SkyScenic | Editar noticia
@endsection

@section('content')
    <livewire:news.update :new="$new" />
@endsection
