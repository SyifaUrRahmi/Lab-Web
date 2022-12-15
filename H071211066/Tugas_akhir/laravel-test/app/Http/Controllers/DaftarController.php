<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaftarController extends Controller
{
    public function daftar($id)
    {
        $user = Auth::user()->id;

        return view('daftar', [
            'mahasiswa' => Mahasiswa::where('user_id',$user)->first(),
            'kelas' => Kelas::where('id',$id)->first(),
        ]);
    }
}
