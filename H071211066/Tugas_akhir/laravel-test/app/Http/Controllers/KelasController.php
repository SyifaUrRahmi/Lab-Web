<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\KelasDosen;
use App\Models\Mahasiswa;
use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
    public function index()
    {
        return view('kelas', [
            'title' => "Daftar Kelas",
            'kelass' => Kelas::all()
        ]);
    }

    public function kelaskudosen()
    {
        $kelass = Kelas::whereHas('dosen', function($q) {
                    $q->where('dosens.user_id', '=', Auth::user()->id);
                })->get();
        return view('kelasku', [
            'title' => "Kelasku",
            'kelass' => $kelass
        ]);
    }

    public function kelaskumahasiswa()
    {
        $kelass = Kelas::whereHas('mahasiswa', function($q) {
                    $q->where('mahasiswas.user_id', '=', Auth::user()->id);
                })->get();
        return view('kelasku', [
            'title' => "Kelasku",
            'kelass' => $kelass
        ]);
    }

    public function details($id){

        return view('detailkelas', [
            'title' => "Detail Kelas",
            'kelas' => Kelas::where('id',$id)->first(),
        ]);
    }

    public function absen($id)
    {
        $mahasiswa = Mahasiswa::all();
        return view('absen', [
            'title' => "Absen",
            'absens' => Absen::where('kelas_id',$id)->get(),
            'kelas' => Kelas::where('id',$id)->first(),
            'mahasiswas' => $mahasiswa
        ]);
    }


}
