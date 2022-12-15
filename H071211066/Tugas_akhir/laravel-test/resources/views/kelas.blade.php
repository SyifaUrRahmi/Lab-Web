@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ $title }}</h1>
</div>

<div class="table-responsive">

  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Kelas</th>
        <th scope="col">Nama Matakuliah</th>
        <th scope="col">Tahun Ajaran</th>
        <th scope="col">Daftar Nama Dosen</th>
        <th scope="col">Jumlah Mahasiswa</th>
        <th scope="col">Action</th>
    </thead>
    <tbody>

      @foreach($kelass as $kelas)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $kelas->nama_kelas }}</td>
        <td>{{ $kelas->matakuliah->nama_matakuliah }}</td>
        <td>{{ $kelas->matakuliah->tahunajaran->tahunajaran }}</td>
        <td>
          @foreach($kelas->dosen as $d)
          {{ $d->nama_dosen }}
          <br>
          @endforeach
        </td>
        <td>{{ $kelas->mahasiswa->count() }}</td>
        
        <td>
          <a class="btn btn-success text-decoration-none" href="/daftar/{{ $kelas->id }}">Daftar</a>
          <a class="btn btn-danger text-decoration-none" href="/">Lepas</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
