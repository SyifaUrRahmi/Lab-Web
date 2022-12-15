<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function matakuliah()
    {
        return $this->belongsToMany(Matakuliah::class, 'matakuliah_dosens');
    }

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'kelas_dosens');
    }

    public function tugas()
    {
        return $this->hasMany(Tugas::class);
    }

}
