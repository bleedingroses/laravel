@extends('layouts.main')

@section('container')
    <h1 class="text-center mb-4">{{ $post->title }}</h1>

    <p>By: Ridho in <a href="/categories/{{ $post->category->slug }}">{{  $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/posts">Kembali Ke Halaman Sebelumnya</a>

@endsection