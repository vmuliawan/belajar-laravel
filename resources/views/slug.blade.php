@extends('layout.layout')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
    <h1>{{ $konten->judul }}</h1>

    <h4>By <a href="/author/{{ $konten->user->username }}" class="text-decoration-none">{{ $konten->user->name }}</a> in <a href="/categories/{{ $konten->category->slug }}" style="text-decoration: none">{{ $konten->category->name }}</a></h4>
    
    <img src="https://source.unsplash.com/random/1000x300?{{ $konten->category->name }}" alt="..." class="img-fluid">

    <article class="my-3">
    {!! $konten->body !!}  
    </article>

    <a href="/blog" class="text-decoration-none btn btn-primary mb-2"> < Back </a>
            </div>
        </div>
    </div>
@endsection

