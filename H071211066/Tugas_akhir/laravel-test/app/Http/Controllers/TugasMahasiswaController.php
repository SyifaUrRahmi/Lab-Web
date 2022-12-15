<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TugasMahasiswaController extends Controller
{
    public function tugas($id)
    {
        return view('tugas', [
            'title' => "Tugas",
            'tugass' => Tugas::where('kelas_id',$id)->get(),
            'kelas' => Kelas::where('id',$id)->first()
        ]);
    }

    public function tambahtugas($id)
    {
        // $dosen = Dosen::all();
        $user = Auth::user()->id;

        return view('tambahtugas', [
            'title' => "Tambah Tugas",
            'kelas' => Kelas::where('id',$id)->first(),
            'dosen' => Dosen::where('user_id',$user)->first(),
        ]);
    }

    public function simpantugas(Request $request ,$id)
    {
        $validatedData = $request->validate([
            'dosen_id' => 'required',
            'kelas_id' => 'required',
            'nama_tugas' => 'required',
            'deskripsi_tugas' => 'required',
            'kelas' => Kelas::where('id',$id)->first()
        ]);
        Tugas::create($validatedData);
        return redirect('/dosentugas/{{ $kelas->id }}')->with('success', 'Tugas berhasil ditambahkan');
    }



}
