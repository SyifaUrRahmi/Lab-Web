@extends('layouts.main')

@section('container')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h1>{{ $post->title }}</h1>
      <p>By: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in
        <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
          {{ $post->category->name}}</a>
        @if($post->image)
          <div style="max-height: 350px; overflow:hidden;"><img src="{{ asset('storage/' . $post->image) }}" alt="
            {{ $post->category->name }}" class="img-fluid my-3">
          </div>
        @else
          <img src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}" alt="
            {{ $post->category->name }}" class="img-fluid my-3">
        @endif
      <article class="my-3 fs-5">
        </p>{!! $post->body !!}
      </article>

      <a href="/posts" class="d-block mt-3 mb-3 text-decoration-none">Back To Posts</a>
    </div>
  </div>
</div>
@endsection