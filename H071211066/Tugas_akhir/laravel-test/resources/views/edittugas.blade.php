@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ $title }}</h1>
</div>

<!-- <form method="post" action="/tugas/{{ kelas->id }}"> -->
  <form method="post" action="/tugas/{{ $kelas->id }}">
  @method('post')
  @csrf
  <div class="mb-3">
    <label for="nama_tugas" class="form-label">Nama Tugas</label>
    <input type="text" class="form-control @error('nama_tugas') is-invalid @enderror" id="nama_tugas" name="nama_tugas" required value="{{ old('nama_tugas', $tugas->nama_tugas) }}">
    @error('nama_tugas')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="deskripsi_tugas" class="form-label">Deskripsi Tugas</label>
    <textarea type="text" class="form-control @error('deskripsi_tugas') is-invalid @enderror" id="deskripsi_tugas" name="deskripsi_tugas" required value="{{ old('deskripsi_tugas', $tugas->deskripsi_tugas) }}"></textarea>
   @error('deskripsi_tugas')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
 <button class="btn btn-primary mb-4" type="submit">Simpan</button>
</form>


@endsection