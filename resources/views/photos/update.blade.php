@extends('layouts.main')

@section('title')
    SkyScenic | Editar foto
@endsection

@section('content')
    <livewire:photos.update :photo="$photo" />
@endsection
