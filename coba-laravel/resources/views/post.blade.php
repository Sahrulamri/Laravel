@extends('layouts.main')
@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <article >
                    <h1 class="mb-3">{{ $post->title }}</h1>
                    <p>By <a href="/blog?author={{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                    @if ($post->image)
                      <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" style="max-height: 400px; overflow:hidden">
                    @else
                    <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
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


