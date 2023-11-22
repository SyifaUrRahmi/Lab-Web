@extends('layouts.main')
@section('container')

<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <h1 class="mb-5">{{ $post->title }}</h1>
      <p>By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?categories={{ $post->category->body }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
      @if($post->image)
        <div style="max-height: 350px; overflow:hidden;">
          <img src="{{ asset('storage/'. $post->image) }}" 
          class="img-fluid" alt="{{ $post->category->name }}">
        </div>
      @else
        <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" 
        class="img-fluid" alt="{{ $post->category->name }}">
      @endif
      
      <article class="my-3 fs-5">
        {!!  $post->body !!}
      </article>
      
      <a href="/posts" class="text-decoration-none mt-3 d-block">Back to Post</a>
    </div>
  </div>
</div>

@endsection

