
@extends('layouts.mainlayout')
@section('title', 'Home')
    
@section('content')
    <h1>Home Page</h1>
    <h2>Welcome {{ $name }} now, your'e {{ $job }} </h2>
   
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Buah</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($buah as $data)
              <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $data }}</td>
              </tr>
          @endforeach
       
        </tbody>
      </table>


@endsection
