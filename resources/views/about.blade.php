@extends('layout.layout')

    @section('container')
    
    <h1 class="display-5">Halaman singkat tentang gw</h1>
    <br>
    <h2>{{ $nama }}</h2>
    <p>{{ $email }}</p>
    <p>{{ $quotes }}</p>
    @endsection