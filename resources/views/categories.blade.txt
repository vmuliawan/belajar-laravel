    @extends('layout.layout')

    @section('container')

    <h1 class="display-3 mt-2">Categories of {{ $category }}</h1>
    <h3><a href="/blog" class="text-decoration-none"><-Back</a></h3>
    <br>

    
    @foreach ($content as $konteng)
        <div class="mb-4 border-bottom p-3">
        <h2 class="display-6">
            <a href="/blog/{{ $konteng->slug }}" class="text-decoration-none">{{ $konteng->judul }}</a>
        </h2>
        <p>{{ $konteng->excerpt }} <a href="/blog/{{ $konteng->slug }}" class="text-decoration-none">Read more...</a></p>
        <h4>By <a href="#" class="text-decoration-none">{{ $konteng->user->name }}</a> in <a href="/categories/{{ $konteng->category->slug }}" style="text-decoration: none">{{ $konteng->category->name }}</a></h4>
        </div>
    @endforeach




    @endsection