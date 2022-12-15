<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tahunajaran()
    {
        return $this->belongsTo(TahunAjaran::class);
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }

    // public function dosen()
    // {
    //     return $this->belongsToMany(Dosen::class, 'matakuliah_dosens');
    // }
}
