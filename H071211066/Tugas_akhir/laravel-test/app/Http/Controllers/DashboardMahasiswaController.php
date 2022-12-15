<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('dashboard.mahasiswa.index', [
            'judul' => 'Daftar Mahasiswa',
            'mahasiswas' => Mahasiswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dashboard.mahasiswa.create', [
            'judul' => 'Tambah Mahasiswa'
            // 'mahasiswas' => Mahasiswa::all()
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
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'angkatan' => 'required'
        ]);
        Mahasiswa::create($validatedData);
        return redirect('dashboard/mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('dashboard.mahasiswa.show', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('dashboard.mahasiswa.edit', [
            'judul' => 'Edit Data Mahasiswa',
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $rules = [
            'nama' => 'required|max:255',
            'nim' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'angkatan' => 'required'
        ];

        $validatedData = $request->validate($rules);
        Mahasiswa::where('id', $mahasiswa->id)->update($validatedData);
        return redirect('dashboard/mahasiswa')->with('success', 'Data Mahasiswa berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::destroy($mahasiswa->id);

        return redirect('/dashboard/mahasiswa')->with('success', 'Mahasiswa berhasil dihapus!');
    }

}
