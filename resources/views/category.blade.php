    @extends('layout.layout')

    @section('container')

    <h1 class="display-3 mt-2">{{ $title }}</h1>
    <h4><a href="/blog" style="text-decoration: none"><-Back</a></h4>
    <br>
    
    @foreach ($content as $category)
        <ul>
            <li><h2><a href="/categories/{{ $category->slug }}" style="text-decoration: none">{{ $category->name }}</a></h2></li>
        </ul>
    @endforeach


    @endsection