@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ $title }}</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

@can('dosen')
<a class="btn btn-primary mb-3" href="/kelasku/create">Tambah Kelas</a>
@endcan
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
          @can('mahasiswa')
          <a href="detailkelas/{{ $kelas->id }}" class="btn btn-info text-light mb-3 ">Details</a>
          @endcan
          @can('dosen')
          <a href="/kelasku/{{ $kelas->id }}" class="badge bg-success"><i class="bi bi-eye"></i></a>
          <a href="/kelasku/{{ $kelas->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
          <form action="/kelasku/{{ $kelas->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0"
                  onclick="return confirm('Are you sure to delete kelas ?')"><i class="bi bi-x-square"></i></button>
          </form>
          @endcan
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
