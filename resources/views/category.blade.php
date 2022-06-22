    @extends('layout.layout')

    @section('container')

    <h1 class="display-3 mt-2">{{ $title }}</h1>
    <h4><a href="/blog" style="text-decoration: none" class="btn btn-dark">< Back</a></h4>
    <br>

    <div class="container">
        <div class="row">
            @foreach ($content as $category)
            <div class="col-md-4">
              <a href="/categories/{{ $category->slug }}">
                <div class="card bg-dark">
                    <img src="https://source.unsplash.com/random/400x400?{{ $category->name }}" class="card-img" alt="..." style="background-blend-mode:darken;">
                    <div class="card-img-overlay text-center d-flex align-items-center justify-content-center" style="background-color: rgba(0,0,0,0.7)">
                      <h5 class="card-title text-center text-white">{{ $category->name }}</h5>
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    
    {{-- @foreach ($content as $category)
        <ul>
            <li><h2><a href="/categories/{{ $category->slug }}" style="text-decoration: none">{{ $category->name }}</a></h2></li>
        </ul>
    @endforeach --}}


    @endsection