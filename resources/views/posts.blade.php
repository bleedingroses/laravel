@extends('layouts.main')

@section('container')
    
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4 text-center">
            <h2 class="text-center mb-4"><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
            
            <p class="text-center mb-4">By: Ridho in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{  $post->category->name }}</a></p>
            
            <p class="text-center mb-4">{{ $post->excerpt }}</p>
            
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">LANJUT BACA</a>
        </article>
    @endforeach

@endsection