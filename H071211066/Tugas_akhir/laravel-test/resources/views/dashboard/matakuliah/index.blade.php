
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

  <a href="/dashboard/matakuliah/create" class="btn btn-primary mb-3">Tambah Matakuliah</a>

  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Matakuliah</th>
        <th scope="col">Nama Dosen</th>
        <th scope="col">Action</th>
    </thead>
    <tbody>

      <!-- Looping category -->
      @foreach($matakuliahs as $matakuliah)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $matakuliah->nama_matakuliah }}</td>
        <td>
        @foreach($matakuliah->kelas as $d)
        @foreach($d->dosen as $k)
        {{ $k->nama_dosen }}
     <br>
        @endforeach
    
        @endforeach
        </td>
        <td>
          <a class="badge bg-info" href="/dashboard/matakuliah/{{ $matakuliah->id }}"><span
              data-feather="eye"></span></a>
          <a class="badge bg-warning" href="/dashboard/matakuliah/{{ $matakuliah->id }}/edit"><span
              data-feather="edit"></span></a>
          <form action="/dashboard/matakuliah/{{ $matakuliah->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0"
                  onclick="return confirm('Are you sure to delete matakuliah ?')"><span
                    data-feather="trash-2"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection