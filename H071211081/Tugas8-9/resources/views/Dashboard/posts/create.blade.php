@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Post</h1>
</div>

<!-- <form action="/dashboard/posts" method="POST">
  @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug">
  </div>
  <button type="submit" class="btn btn-primary">Create Post</button>
</form> -->
<!-- Sudah tdk mau berhasil -->
<form action="/create" method="post">
  @csrf
  <input type="text">
  <button type="submit">Test</button>
</form>

<!-- Buat slug cara lain -->
<script>
  const title = document.querySelector("#title");
  const slug = document.querySelector("#slug");

  title.addEventListener("keyup", function() {
    let preslug = title.value;
    preslug = preslug.replace(/ /g,"-");
    slug.value = preslug.toLowerCase();
  });
</script>

@endsection