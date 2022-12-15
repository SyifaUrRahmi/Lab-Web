@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1>Mahasiswa : {{ $mahasiswa->nama }}</h1>

      <a href="/dashboard/mahasiswa" class="btn btn-success"><i class="bi bi-arrow-bar-left"></i>Kembali</a>
      <a href="/dashboard/" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>

      <div>
        </p> Nama : {!! $mahasiswa->nama !!}
        </p> Nim : {!! $mahasiswa->nim !!}
        </p> Jenis Kelamin : {!! $mahasiswa->jenis_kelamin !!}
        </p> Nim : {!! $mahasiswa->nim !!}
        </p> Alamat : {!! $mahasiswa->alamat !!}
        </p> Angkatan : {!! $mahasiswa->angkatan !!}
      </div>

    </div>
  </div>
</div>
@endsection