<!-- Mengambil Layout utama -->
@extends('layouts.main')

<!-- Berisi hal-hal berbeda dari setiap halaman yang akan di tampilkan di layout utama -->
@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>

@foreach ($posts as $post)
<article>
  <h2><a href="/posts/{{ $post->slug  }}">{{ $post->title }}</a></h2>
</article>

@endsection