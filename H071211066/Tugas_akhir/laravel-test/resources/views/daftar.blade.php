@extends('layouts.main')

@section('container')

<form action="/daftar" method="POST">
  @csrf
  <div class="mb-3">
    <label for="mahasiswa_id" class="form-label">Id Mahasiswa</label>
    <input type="text" class="form-control" name="mahasiswa_id" readonly value="{{ $mahasiswa->id }}">
  </div>
  <div class="mb-3">
    <label for="kelas_id" class="form-label">Kelas Id</label>
    <input type="number" class="form-control" name="kelas_id" readonly value="{{ $kelas->id }}">
  </div>
 <button class="btn btn-primary mb-4" type="submit">Daftar</button>
</form>

@endsection