@extends('layouts.main')

@section('container')
  <h1>Halaman About</h1>
  <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
  <p>Halo nama saya {{ $name }}, email saya {{ $email }}</p>
@endsection
  