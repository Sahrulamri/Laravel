@extends('layouts.main')
@section('container')
    <h1 class="mb-3 text-center">
        {{ $title }}
    </h1>

    <div class="row mb-3 justify-content-center">
      <div class="col-md-6">
        <form action="/blog" method="get">
          @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
          @endif

          @if (request('author'))
              <input type="hidden" name="author" value="{{ request('author') }}">
          @endif

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Silahkan masukkan yang anda cari..." name="search" value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit"  >Search</button>
          </div>
        </form>
      </div>
    </div>

    @if ($posts->count())
    <div class="card mb-3 ">
        @if ($posts[0]->image)
          <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid" style="max-height: 400px; overflow:hidden">
          @else
          <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
          @endif
        
        <div class="card-body text-center">
          <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
          <p class="card-text">{{ $posts[0]->excerpt }}.</p>
          <p>By <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a></p>
          {{-- <a href="/post/{{ $post->slug }}" class="text-decoration-none btn btn-primary"><p class="mt-4">Read More</p></a> --}}
          <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
          <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
        </div>
      </div>
    

      <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute text-white px-4 py-2" style="background-color: rgba(0, 0, 0, 0.6)">
                        <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
                    </div>
                    @if ($post->image)
                      <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" style="max-height: 400px; overflow:hidden">
                    @else
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif
                    
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p>By <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></p>

                      {!! $post->excerpt !!}
                      <br>

                      <a href="/post/{{ $post->slug }}" class="btn btn-primary mt-3">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
      </div>
      @else
      <p class="text-center fs-3">Post Not Found</p>
  @endif

  <div class="d-flex justify-content-center mx-3 my-5">
      {{ $posts->links() }}
  </div>
@endsection
