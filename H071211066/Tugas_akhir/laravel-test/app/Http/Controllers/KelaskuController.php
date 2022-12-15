<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\KelasDosen;
use App\Models\Matakuliah;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelaskuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelass = Kelas::whereHas('dosen', function($q) {
                    $q->where('dosens.user_id', '=', Auth::user()->id);
                })->get();
        return view('kelasku', [
            'title' => "Kelasku",
            'kelass' => $kelass
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $matakuliah = Matakuliah::whereHas('kelas', function($q) {
        //             $q->where('dosens.user_id', '=', Auth::user()->id);
        //         })->get();
        $user = Auth::user()->id;
        $matakuliah = Matakuliah::whereHas('kelas', function($q) {
                    $q->whereHas('dosen', function($r) {
                        $r->where('dosens.user_id', '=', Auth::user()->id);
                    });
                })->get();

        return view('tambahkelas', [
            'title' => "Tambah Kelas",
            'matakuliahs' => $matakuliah,
            'dosen' => Dosen::where('user_id',$user)->first(),
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $kelas = $request->validate([
            'id'  => 'required|unique:kelas',
            'nama_kelas' => 'required',
            'deskripsi_kelas' => 'required',
            'matakuliah_id' => 'required'
        ]);
        Kelas::create($kelas);

        $kelasdosen = $request->validate([
            'kelas_id' => 'required',
            'dosen_id' => 'required'
        ]);
        KelasDosen::create($kelasdosen);

        return redirect('kelasku')->with('success', 'Kelas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('detailkelas', [
            'title' => "Detail Kelas",
            'kelas' => Kelas::where('id',$id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user()->id;
        $matakuliah = Matakuliah::whereHas('kelas', function($q) {
                    $q->whereHas('dosen', function($r) {
                        $r->where('dosens.user_id', '=', Auth::user()->id);
                    });
                })->get();

        return view('editkelas', [
            'title' => "Edit Kelas",
            'matakuliahs' => $matakuliah,
            'dosen' => Dosen::where('user_id',$user)->first(),
            'kelas' => Kelas::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {

        $updatekelas = $request->validate([
            'nama_kelas' => 'required',
            'deskripsi_kelas' => 'required',
            'matakuliah_id' => 'required'
        ]);
        Kelas::where('id', $kelas->id)
            ->update($updatekelas);

        return redirect('/kelasku')->with('success', 'Kelas berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        Kelas::destroy($kelas->id);

        KelasDosen::destroy($kelas->id);

        return redirect('/kelasku')->with('success', 'Kelas berhasil dihapus');
    }
}
