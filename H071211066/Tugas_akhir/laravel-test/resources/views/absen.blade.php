@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ $title }}</h1>
</div>
<h2>Kelas : {{ $kelas->nama_kelas }}</h2>

<div class="d-flex">
 <div>
  <a class="btn btn-success m-4" href="/">Hadir</a>
 </div> 
 <div>
  <a class="btn btn-primary m-4" href="/">Izin</a>
 </div> 
 <div>
  <a class="btn btn-warning m-4" href="/">Sakit</a>
 </div> 
</div>
@endsection
