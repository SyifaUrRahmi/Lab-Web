<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $guarded = [];

    public function matakuliah()
    {
        return $this->belongsTo(MataKuliah::class);
    }

    public function dosen()
    {
        return $this->belongsToMany(Dosen::class, 'kelas_dosens');
    }

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'kelas_mahasiswas');
    }

    public function tugas()
    {
        return $this->hasMany(Tugas::class);
    }

    public function absen()
    {
        return $this->belongsTo(Absen::class, 'id');
    }

}
