@extends('layouts.mainlayout')
@section('title', 'About')

@section('content')
    <h1>Ini halaman About</h1>
    @foreach ($students as $item)
    <li>
        {{ $item->name }}
    </li>
    @endforeach
@endsection