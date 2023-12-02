@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article >
                <h1 class="my-3">{{ $post->title }}</h1>
                
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back To All My Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                      <button class="btn btn-danger" onclick="return confirm('Are want to delete this post?')"><span data-feather="x-circle"></span>Delete</button>
                  </form>
                  @if ($post->image)
                  <div class="d-block">
                      <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3" style="max-height: 400px; overflow:hidden;">
                  </div>
                  @else
                  <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                  @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
        
                <a href="/blog" class="d-block mt-5 text-decoration-none">Back To Post</a>
            </article>
        </div>
    </div>
</div>


@endsection