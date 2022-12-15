@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ $title }}</h1>
</div>
<h3 class="mb-3">Kelas : {{ $kelas->nama_kelas }}</h3>
<form action="/tugas/{{ $kelas->id }}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="kelas_id" class="form-label">Id Kelas</label>
    <input type="text" class="form-control" id="nama_kelas" name="kelas_id" readonly value="{{ $kelas->id }}">
  </div>
  <div class="mb-3">
    <label for="dosen_id" class="form-label">Id Dosen</label>
    <input type="text" class="form-control" id="nama_dosen" name="dosen_id" readonly value="{{ $dosen->id }}">
  </div>
  <div class="mb-3">
    <label for="nama_tugas" class="form-label">Nama Tugas</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="nama_tugas" name="nama_tugas" required autofocus value="{{ old('nama_tugas') }}">
    @error('nama_tugas')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="deskripsi_tugas" class="form-label">Deskripsi Tugas</label>
    <textarea type="text" class="form-control" id="deskripsi_tugas" name="deskripsi_tugas" required value="{{ old('deskripsi_tugas') }}"></textarea>
   @error('deskripsi_tugas')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
 <button class="btn btn-primary" type="submit" name="simpan">Tambahkan</button>
</form>


@endsection