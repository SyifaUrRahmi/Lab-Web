@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1>kelas : {{ $kelas->nama_kelas }}</h1>

      <a href="/dashboard/kelas" class="btn btn-success"><i class="bi bi-arrow-bar-left"></i>Kembali</a>
      <a href="/dashboard/" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>

      <div>
        <p>Nama Kelas : {{ $kelas->nama_kelas }}</p>
        <p>Deskripsi Kelas : {{ $kelas->deskripsi_kelas }}</p>
        <p>Matakuliah : {{ $kelas->matakuliah->nama_matakuliah }}</p>
        <p>Tahun Ajaran : {{ $kelas->matakuliah->tahunajaran->tahunajaran }}</p>
        <p>Jumlah Dosen : {{ $kelas->dosen->count() }}</p>
        <p>Jumlah Mahasiswa : {{ $kelas->mahasiswa->count() }}</p>
        <!-- <p>
          @foreach($kelas->dosen as $d)
          {{ $d->nama_dosen }}
          <br>
          @endforeach
        </p> -->
      </div>

    </div>
  </div>
</div>
@endsection