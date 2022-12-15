
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

  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Kelas</th>
        <th scope="col">Nama Matakuliah</th>
        <th scope="col">Tahun Ajaran</th>
        <th scope="col">Jumlah Dosen</th>
        <th scope="col">Jumlah Mahasiswa</th>
        <th scope="col">Action</th>
    </thead>
    <tbody>

      <!-- Looping category -->
      @foreach($kelass as $kelas)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $kelas->nama_kelas }}</td>
        <td>{{ $kelas->matakuliah->nama_matakuliah }}</td>
        <td>{{ $kelas->matakuliah->tahunajaran->tahunajaran }}</td>
        <td>{{ $kelas->dosen->count() }}</td>
        <td>{{ $kelas->mahasiswa->count() }}</td>
        <!-- <td>
          @foreach($kelas->dosen as $d)
          {{ $d->nama_dosen }}
          <br>
          @endforeach
        </td> -->
        
        <td>
          <a class="badge bg-info" href="/dashboard/kelas/{{ $kelas->id }}"><span
              data-feather="eye"></span></a>
          <form action="/dashboard/kelas/{{ $kelas->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0"
                  onclick="return confirm('Are you sure to delete kelas ?')"><span
                    data-feather="trash-2"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection