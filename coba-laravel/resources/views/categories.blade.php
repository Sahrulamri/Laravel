@extends('layouts.main')
@section('container')

    <h1 class="mb-5 text-center">Post Category</h1>

    <div class="container ">
        <div class="row  justify-content-md-center">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/categories/{{ $category->slug }}">
                                <div class="card bg-dark text-white mb-5">
                                    <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                                    <div class="card-img-overlay d-flex flex-column justify-content-center p-0">
                                            <a href="/blog?category={{ $category->slug }}" class="text-decoration-none flex-fill text-center text-white" ><h5 class="card-title text-center flex-fill px-3 py-2 fs-4" style="background-color: rgba(0, 0, 0, 0.6)">{{ $category->name }}</h5></a>
                                          <p class="card-text text-center fs-6" style="background-color: rgba(0, 0, 0, 0.6)" >{{ $category->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    
   

    
@endsection
 