<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardDosenController;
use App\Http\Controllers\DashboardKelasController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\DashboardMatakuliahController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelaskuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\TugasMahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Kelas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'active' => 'dashboard',
    ]);
})->middleware('admin');


Route::resource('dashboard/mahasiswa', DashboardMahasiswaController::class);

Route::resource('dashboard/dosen', DashboardDosenController::class);

Route::resource('dashboard/matakuliah', DashboardMatakuliahController::class);

Route::resource('dashboard/kelas', DashboardKelasController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/profilemahasiswa', [ProfileController::class, 'mahasiswa'])->middleware('mahasiswa');
Route::get('/profiledosen', [ProfileController::class, 'dosen'])->middleware('dosen');

Route::get('/dosendaftarkelas', [KelasController::class, 'index'])->middleware('dosen');
Route::get('/mahasiswadaftarkelas', [KelasController::class, 'index'])->middleware('mahasiswa');

Route::get('/kelaskudosen', [KelasController::class, 'kelaskudosen'])->middleware('dosen');
Route::get('/kelaskumahasiswa', [KelasController::class, 'kelaskumahasiswa'])->middleware('mahasiswa');

Route::get('/detailkelas/{kelas:id}', [KelasController::class, 'details']);

Route::get('/mahasiswatugas/{kelas:id}', [TugasMahasiswaController::class, 'tugas'])->middleware('mahasiswa');

Route::get('/mahasiswaabsen/{kelas:id}', [KelasController::class, 'absen'])->middleware('mahasiswa');

Route::get('/dosentugas/{kelas:id}', [TugasController::class, 'tugas'])->middleware('dosen');

Route::get('/dosenabsen/{kelas:id}', [KelasController::class, 'absen'])->middleware('dosen');

Route::get('/tambahtugas/{kelas:id}', [TugasController::class, 'tambahtugas'])->middleware('dosen');

Route::post('/simpantugas', [TugasController::class, 'simpantugas'])->middleware('dosen');

Route::post('/simpankelas/{kelas:id}', [KelaskuController::class, 'update'])->middleware('dosen');

Route::resource('kelasku', KelaskuController::class)->middleware('dosen');
Route::resource('tugas/{kelas:id}', TugasController::class)->middleware('dosen');

Route::get('/daftar/{kelas:id}', [DaftarController::class, 'daftar'])->middleware('mahasiswa');

