@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>

  </div>

  <div class="table-responsive col-lg-6">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>

    @if (session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
          
            <td>
                
              <a href="{{ route('categories.edit', $category) }}"  class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Do you want to delete this category?')"><span data-feather="x-circle"></span></button>
                </form>
            </td>

        </tr>
        @endforeach

      </tbody>
    </table>
  </div>

@endsection
