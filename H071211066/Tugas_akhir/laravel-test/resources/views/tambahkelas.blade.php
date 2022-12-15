@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ $title }}</h1>
</div>

<form action="/kelasku" method="POST">
  @csrf
  <div class="mb-3">
    <label for="dosen_id" class="form-label">Id Dosen</label>
    <input type="text" class="form-control" id="nama_dosen" name="dosen_id" readonly value="{{ $dosen->id }}">
  </div>
  <div class="mb-3">
    <label for="id" class="form-label">Id</label>
    <input type="number" class="form-control @error('id') is-invalid @enderror" id="id" name="id" required autofocus value="{{ old('id') }}">
  </div>
  @error('id')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
  <div class="mb-3">
    <label for="kelas_id" class="form-label">Id kelas</label>
    <input type="number" class="form-control" id="kelas_id" name="kelas_id" required autofocus value="{{ old('kelas_id') }}">
  </div>
    <div class="mb-3">
    <label for="category" class="form-label">Matakuliah</label>
    <select class="form-select" name="matakuliah_id">
      @foreach($matakuliahs as $matakuliah)
      @if(old('matakuliah_id') == $matakuliah->id)
      <option value="{{ $matakuliah->id }}" selected>{{ $matakuliah->nama_matakuliah }}</option>
      @else
      <option value="{{ $matakuliah->id }}">{{ $matakuliah->nama_matakuliah }}</option>
      @endif
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="nama_kelas" class="form-label">Nama Kelas</label>
    <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror" id="nama_kelas" name="nama_kelas" required value="{{ old('nama_kelas') }}">
    @error('nama_kelas')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="deskripsi_kelas" class="form-label">Deskripsi kelas</label>
    <textarea type="text" class="form-control @error('deskripsi_kelas') is-invalid @enderror" id="deskripsi_kelas" name="deskripsi_kelas" required value="{{ old('deskripsi_kelas') }}"></textarea>
   @error('deskripsi_kelas')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
 <button class="btn btn-primary mb-4" type="submit">Tambahkan</button>
</form>

<script>
  const id = document.querySelector("#id");
  const kelasid = document.querySelector("#kelas_id");

  id.addEventListener("keyup", function() {
    let prekelasid = id.value;
    prekelasid = prekelasid.replace(/ /g,"-");
    kelasid.value = prekelasid.toLowerCase();
  });
</script>


@endsection