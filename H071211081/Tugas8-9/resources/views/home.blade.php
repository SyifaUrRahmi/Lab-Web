<!-- Mengambil Layout utama -->
@extends('layouts.main')

<!-- Berisi hal-hal berbeda dari setiap halaman yang akan di tampilkan di layout utama -->
@section('container')
<h1>Halaman {{ $title }}</h1>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/3.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
@endsection

<!-- extends section include yield disebut directive blade -->