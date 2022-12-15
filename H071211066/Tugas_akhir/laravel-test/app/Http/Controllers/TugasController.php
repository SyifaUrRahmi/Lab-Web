<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('tugas', [
            'title' => "Tugas",
            'tugass' => Tugas::where('kelas_id',$id)->get(),
            'kelas' => Kelas::where('id',$id)->first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = Auth::user()->id;

        return view('tambahtugas', [
            'title' => "Tambah Tugas",
            'kelas' => Kelas::where('id',$id)->first(),
            'dosen' => Dosen::where('user_id',$user)->first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'dosen_id' => 'required',
            'kelas_id' => 'required',
            'nama_tugas' => 'required',
            'deskripsi_tugas' => 'required',
            'kelas' => Kelas::where('id',$id)->first()
        ]);
        Tugas::create($validatedData);
        return redirect('/tugas/{{ $kelas->id }}')->with('success', 'Tugas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function show(Tugas $tugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function edit(Tugas $tugas, $id)
    {
        $user = Auth::user()->id;

        return view('editkelas', [
            'title' => "Edit Kelas",
            'dosen' => Dosen::where('user_id',$user)->first(),
            'kelas' => Kelas::where('id',$id)->first(),
            'tugas' => $tugas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tugas $tugas)
    {
            $updatetugas = $request->validate([
            'nama_tugas' => 'required',
            'deskripsi_tugas' => 'required'
        ]);
        Tugas::where('id', $tugas->id)
            ->update($updatetugas);

        return redirect('/tugas/{{ $kelas->id }}')->with('success', 'tugas berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tugas $tugas)
    {
        Tugas::destroy($tugas->id);

        return redirect('/tugas/{{ $kelas->id }}')->with('success', 'tugas berhasil dihapus');
    }
}
