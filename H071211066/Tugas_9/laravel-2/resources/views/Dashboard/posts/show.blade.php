@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1>{{ $post->title }}</h1>

      <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-bar-left"></i>Back to all my posts</a>
      <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>


      @if($post->image)
      <div style="max-height: 350px; overflow:hidden;"><img src="{{ asset('storege/' . $post->image) }}" alt="
        {{ $post->category->name }}" class="img-fluid my-3"></div>
      @else
      <img src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}" alt="
        {{ $post->category->name }}" class="img-fluid my-3">
      @endif

      <article class="my-3 fs-5">
        </p>{!! $post->body !!}
      </article>

    </div>
  </div>
</div>
@endsection