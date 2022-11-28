<!-- Mengambil Layout utama -->
@extends('layouts.main')

<!-- Berisi hal-hal berbeda dari setiap halaman yang akan di tampilkan di layout utama -->
@section('container')
<h1>Halaman {{ $title }}</h1>
@endsection

<!-- extends section include yield disebut directive blade -->