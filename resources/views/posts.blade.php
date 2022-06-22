    @extends('layout.layout')

    @section('container')

    <h1 class="display-5 mt-2">{{ $title }} <a href="/category" style="text-decoration: none" class="btn btn-dark">Category ></a></h1>
    

    {{-- Hero card --}}
    <div class="card mb-3">
        <img src="https://source.unsplash.com/random/1000x400?{{ $content[0]->category->name }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">{{ $content[0]->judul }}</h5>
          <p class="card-text">{{ $content[0]->excerpt }}</p>
          <button class="btn btn-primary mb-3"><a href="/blog/{{ $content[0]->slug }}" class="text-decoration-none text-light">Read More...</a></button>
          <h5>By <a href="/author/{{ $content[0]->user->username }}" class="text-decoration-none">{{ $content[0]->user->name }}</a> in <a href="/categories/{{ $content[0]->category->slug }}" style="text-decoration: none">{{ $content[0]->category->name }}</a></h5>
          <p class="card-text"><small class="text-muted">{{ $content[0]->created_at->diffForHumans() }}</small></p>
        </div>
      </div>

      {{-- Child Card --}}
    <div class="container">
        <div class="row">
            @if(is_array($content) || is_object($content))
                @foreach($content as $konteng)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        
                        <p class="position-absolute bg-dark p-1 ms-1"><a href="/categories/{{ $konteng->category->slug }}" class="text-decoration-none text-white">{{ $konteng->category->name }}</a></p>
                    
                        <img src="https://source.unsplash.com/200x200?{{ $konteng->category->name }}" class="card-img-top" alt="..." style="height: 18rem">
                        <div class="card-body" style="height: auto">
                          <h5 class="card-title">{{ $konteng->judul }}</h5>
                          <p class="card-text">{{ $konteng->excerpt }}</p>
                          <a href="/blog/{{ $konteng->slug }}" class="btn btn-primary mb-2">Read more</a>
                          <h4>By <a href="/author/{{ $konteng->user->username }}" class="text-decoration-none">{{ $konteng->user->name }}</a> in <a href="/categories/{{ $konteng->category->slug }}" style="text-decoration: none">{{ $konteng->category->name }}</a></h4>
                          <p class="card-text"><small class="text-muted">{{ $content[0]->created_at->diffForHumans() }}</small></p>
                        </div>
                      </div>    
                </div>
                @endforeach
            @endif
        </div>    
    </div>  

    {{-- @if (is_array($content) || is_object($content))
    @foreach ($content->skip(1) as $konteng) 
        <div class="mb-4 border-bottom p-3">
        <h2 class="display-6">
            <a href="/blog/{{ $konteng->slug }}" class="text-decoration-none">{{ $konteng->judul }}</a>
        </h2>
        <p>{{ $konteng->excerpt }} <a href="/blog/{{ $konteng->slug }}" class="text-decoration-none">Read More...</a></p>
        
        <h4>By <a href="/author/{{ $konteng->user->username }}" class="text-decoration-none">{{ $konteng->user->name }}</a> in <a href="/categories/{{ $konteng->category->slug }}" style="text-decoration: none">{{ $konteng->category->name }}</a></h4>
        </div>
    @endforeach
    @endif --}}



    @endsection