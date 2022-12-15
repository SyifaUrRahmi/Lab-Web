
@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ $judul }}</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive">

  <a href="/dashboard/dosen/create" class="btn btn-primary mb-3">Tambah Dosen</a>

  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">NIP</th>
        <th scope="col">Action</th>
    </thead>
    <tbody>

      <!-- Looping category -->
      @foreach($dosens as $dosen)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $dosen->nama_dosen }}</td>
        <td>{{ $dosen->nip }}</td>
        <td>
          <a class="badge bg-info" href="/dashboard/dosen/{{ $dosen->id }}"><span
              data-feather="eye"></span></a>
          <a class="badge bg-warning" href="/dashboard/dosen/{{ $dosen->id }}/edit"><span
              data-feather="edit"></span></a>
          <form action="/dashboard/dosen/{{ $dosen->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0"
                  onclick="return confirm('Are you sure to delete dosen ?')"><span
                    data-feather="trash-2"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection