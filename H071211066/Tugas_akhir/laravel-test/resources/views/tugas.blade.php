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
<h2 class="mb-3">Kelas : {{ $kelas->nama_kelas }}</h2>

@can('dosen')
<a class="btn btn-primary mb-3" href="/tugas/{{ $kelas->id }}/create">Tambah Tugas</a>
@endcan
<div class="table-responsive">

  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Tugas</th>
        <th scope="col">Deskripsi Tugas</th>
        <th scope="col">Action</th>
    </thead>
    <tbody>
      @foreach($tugass as $tugas)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $tugas->nama_tugas }}</td>
        <td>{{ $tugas->deskripsi_tugas }}</td>
        <td>
          @can('dosen')
          <a href="/tugas/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
          <form action="/tugas/{{ $kelas->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
              <i class="bi bi-x-square"></i>
            </button>
          </form>
          @endcan
          @can('mahasiswa')
          <a href="/tugas/{{ $kelas->id }}/upload" class="bg-warning text-ligt rounded p-2 text-decoration-none">Upload Tugas</a>
          @endcan
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
