@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1>Dosen : {{ $dosen->nama }}</h1>

      <a href="/dashboard/dosen" class="btn btn-success"><i class="bi bi-arrow-bar-left"></i>Kembali</a>
      <a href="/dashboard/" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>

      <div>
        </p> Nama : {!! $dosen->nama !!}
        </p> NIP : {!! $dosen->nip !!}
        </p> Alamat : {!! $dosen->alamat !!}
        </p> Nomor Telpon : {!! $dosen->no_telp !!}
      </div>

    </div>
  </div>
</div>
@endsection