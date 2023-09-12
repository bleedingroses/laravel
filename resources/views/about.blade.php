@extends('layouts.main')

@section('container')
    <h1 class="text-center mb-4">Tentang Saya</h1>
    <h3 class="text-center mb-4">{{ $name }}</h3>
    <p class="text-center mb-4">{{ $email }}</p>
    <p class="text-center mb-4"><img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle"></p>
@endsection