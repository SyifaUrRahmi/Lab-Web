<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::whereHas('user', function($q) {
                    $q->where('mahasiswas.user_id', '=', Auth::user()->id);
                })->get();
                return $mahasiswa;
        return view('profile', [
            'title' => "Profile",
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function dosen()
    {
       $user = Auth::user()->id;
        return view('profile', [
            'title' => "Profile",
            'dosen' => Dosen::where('user_id',$user)->first(),
        ]);
    }
}
