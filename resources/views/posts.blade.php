    @extends('layout.layout')

    @section('container')

    <h1 class="display-5 mt-2">{{ $title }}</h1>
    <br>

    <h3><a href="/category" style="text-decoration: none">Category</a></h3>
    <br>

    @if (is_array($content) || is_object($content))
    @foreach ($content as $konteng) 
        <div class="mb-4 border-bottom p-3">
        <h2 class="display-6">
            <a href="/blog/{{ $konteng->slug }}" class="text-decoration-none">{{ $konteng->judul }}</a>
        </h2>
        <p>{{ $konteng->excerpt }} <a href="/blog/{{ $konteng->slug }}" class="text-decoration-none">Read More...</a></p>
        
        <h4>By <a href="/author/{{ $konteng->user->username }}" class="text-decoration-none">{{ $konteng->user->name }}</a> in <a href="/categories/{{ $konteng->category->slug }}" style="text-decoration: none">{{ $konteng->category->name }}</a></h4>
        </div>
    @endforeach
    @endif



    @endsection