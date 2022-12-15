@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ $judul }}</h1>
</div>

<form action="/dashboard/mahasiswa" method="post">
  @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
  </div>
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" id="nim" name="nim" required value="{{ old('nim') }}">
  </div>
  <div class="mb-3">
    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" required value="{{ old('jenis_kelamin') }}">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" required value="{{ old('alamat') }}">
  </div>
  <div class="mb-3">
    <label for="angkatan" class="form-label">Angkatan</label>
    <input type="text" class="form-control" id="angkatan" name="angkatan" required value="{{ old('angkatan') }}">
  </div>
  <button type="submit">Tambahkan</button>
</form>

<form action="tes" method="post">
  <label for="nama" class="form-label">Nama</label>
  <input type="text" class="form-control" id="nama" name="nama">
  <label for="nim" class="form-label">NIM</label>
  <input type="text" class="form-control" id="nim" name="nim">
  <button type="submit">test</button>
</form>

@endsection