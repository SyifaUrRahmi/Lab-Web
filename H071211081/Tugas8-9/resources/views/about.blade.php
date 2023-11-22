<!-- Mengambil Layout utama -->
@extends('layouts.main')

<!-- Berisi hal-hal berbeda dari setiap halaman yang akan di tampilkan di layout utama -->
@section('container')
<h1>Halaman {{ $title }}</h1>
<h3>{{ $nama }}</h3>
  <p>{{ $email }}</p>
  <img src="assets/images/{{ $img }}" alt="{{ $nama }}" width="1000" >
@endsection