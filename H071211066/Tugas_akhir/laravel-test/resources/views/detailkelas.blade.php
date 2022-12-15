@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row">
    <div>
      @can('dosen')
      <a href="/kelasku" class="btn btn-success mb-4"><i class="bi bi-arrow-bar-left mb-2"></i>Kembali</a>
      @endcan
      @can('mahasiswa')
      <a href="/kelaskumahasiswa" class="btn btn-success  mb-2"><i class="bi bi-arrow-bar-left"></i>Kembali</a>
      @endcan
      <div class="container-fluid p-2">
        <p>Deskripsi Kelas : {{ $kelas->deskripsi_kelas }}</p>
        <p>Daftar Dosen :
          <br>
          @foreach($kelas->dosen as $d)
          {{ $d->nama_dosen }}
          <br>
          @endforeach
        </p>
        <p>Daftar Mahasiswa :
          <br>
          @foreach($kelas->mahasiswa as $m)
          {{ $m->nama }}
          <br>
          @endforeach
        </p>
      </div>
      <div class="mt-4">
      @can('dosen')
      <a href="/tugas/{{ $kelas->id }}" class="btn btn-primary">Tugas</a>
      <a href="/dosenabsen/{{ $kelas->id }}" class="btn btn-warning text-light">Absen</a>
      @endcan
      @can('mahasiswa')
      <a href="/mahasiswatugas/{{ $kelas->id }}" class="btn btn-primary">Tugas</a>
      <a href="/mahasiswaabsen/{{ $kelas->id }}" class="btn btn-warning text-light">Absen</a>
      @endcan
      </div>
    </div>
  </div>
</div>
@endsection