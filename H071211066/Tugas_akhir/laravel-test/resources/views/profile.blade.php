@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      @can('mahasiswa')
      <h1>Mahasiswa : {{ $mahasiswa->nama }}</h1>

      <a href="/home" class="btn btn-success"><i class="bi bi-arrow-bar-left"></i>Kembali</a>

      <div>
        </p> Nama : {!! $mahasiswa->nama !!}
        </p> Nim : {!! $mahasiswa->nim !!}
        </p> Jenis Kelamin : {!! $mahasiswa->jenis_kelamin !!}
        </p> Nim : {!! $mahasiswa->nim !!}
        </p> Alamat : {!! $mahasiswa->alamat !!}
        </p> Angkatan : {!! $mahasiswa->angkatan !!}
      </div>
      @endcan

      @can('dosen')
      <h1>Dosen : {{ $dosen->nama }}</h1>

      <a href="/home" class="btn btn-success"><i class="bi bi-arrow-bar-left"></i>Kembali</a>

      <div>
        </p> Nama : {!! $dosen->nama_dosen !!}
        </p> Nip : {!! $dosen->nip !!}
        </p> Alamat : {!! $dosen->alamat !!}
        </p> Nomor Telepon : {!! $dosen->no_telp !!}
      </div>
      @endcan
    </div>
  </div>
</div>
@endsection