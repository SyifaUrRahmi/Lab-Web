<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DashboardDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dosen.index', [
            'judul' => 'Daftar dosen',
            'dosens' => Dosen::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dosen.create', [
            'judul' => 'Tambah Dosen'
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
            'nip' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required'
        ]);
        Dosen::create($validatedData);
        return redirect('dashboard/dosen')->with('success', 'Dosen berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        return view('dashboard.dosen.show', [
            'dosen' => $dosen
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        return view('dashboard.dosen.edit', [
            'judul' => 'Edit Data Dosen',
            'dosen' => $dosen
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen)
    {
        $rules = [
            'nama' => 'required|max:255',
            'nip' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required'
        ];

        $validatedData = $request->validate($rules);
        Dosen::where('id', $dosen->id)->update($validatedData);
        return redirect('dashboard/dosen')->with('success', 'Data Dosen berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {
        Dosen::destroy($dosen->id);

        return redirect('/dashboard/dosen')->with('success', 'Dosen berhasil dihapus!');
    }
}
