@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ $judul }}</h1>
</div>

<form action="/dashboard/dosen" method="post">
  @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
  </div>
  <div class="mb-3">
    <label for="nip" class="form-label">NIP</label>
    <input type="text" class="form-control" id="nip" name="nip" required value="{{ old('nip') }}">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" required value="{{ old('alamat') }}">
  </div>
  <div class="mb-3">
    <label for="no_telp" class="form-label">Nomor Telpon</label>
    <input type="text" class="form-control" id="no_telp" name="no_telp" required value="{{ old('no_telp') }}">
  </div>
  <button type="submit">Tambahkan</button>
</form>


@endsection