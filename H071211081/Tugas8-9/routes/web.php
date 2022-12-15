<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    // mengarahkan ke view about
    return view('about', [
        // variabel yang di gunakan di view about
        "title" => "About",
        "nama" => "muslih sahmat",
        "email" => "mohmuslih@gmail.com",
        "img" => "about.png"
    ]);
});

Route::get('/posts', function () {
    // mengarahkan ke view posts
    return view('posts', [
        "title" => "Posts"
    ]);
});

// mengarahkan ke class PostController dgn method index
Route::get('/posts', [PostController::class, 'index']);

// mengarahkan ke class PostController dgn method show
// Route model binding where slug = ...
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Kelola tanpa Controller
Route::get('/dashboard', function () {
    return view('Dashboard.index');
    // middleware('auth') Diakses oleh user yang sudah terautentikasi
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// sudah tidak mau berhasil
Route::post('/create', [CreateController::class, 'test']);