@extends('layout.layout')

@section('container')
    <h1>{{ $konten->judul }}</h1>

    <h4>By <a href="/author/{{ $konten->user->username }}" class="text-decoration-none">{{ $konten->user->name }}</a> in <a href="/categories/{{ $konten->category->slug }}" style="text-decoration: none">{{ $konten->category->name }}</a></h4>
    
    {!! $konten->body !!}  

    <a href="/blog" class="text-decoration-none d-block">Back</a>
@endsection

