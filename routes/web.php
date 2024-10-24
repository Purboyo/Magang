<?php

use App\Http\Controllers\AddPPDBController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeskripsiController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ListppdbController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\P5raController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\VisiMisiController;
use App\Models\Listppdb;
use App\Models\Sejarah;
use App\Models\Struktur;
use Illuminate\Support\Facades\Route;

// Website
Route::get('/', [HomeController::class, 'index']);
Route::get('/sejarahalmuawanah', [HomeController::class, 'sejarah']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/organisasi', [HomeController::class, 'organisasi']);
Route::get('/berita', [HomeController::class, 'berita']);
Route::get('/berita/{id}', [HomeController::class, 'detailberita'])->name('berita.detail');
Route::get('/strukturorganisasi', [HomeController::class, 'struktur']);
Route::get('/dokumentasi', [HomeController::class, 'dokumentasi']);
Route::get('/fasilitasmadrasah', [HomeController::class, 'fasilitas']);
Route::get('/p5ra', [HomeController::class, 'p5ra']);
Route::get('/ppdbmtsalmuawanah', [HomeController::class, 'ppdb']);
Route::get('/prestasi', [HomeController::class, 'prestasi']);

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//Admin Beranda
Route::resource('beranda', BerandaController::class)->middleware('auth');
Route::resource('sliders', SlidersController::class)->middleware('auth');
Route::resource('sambutan', SambutanController::class)->middleware('auth');
Route::resource('statistik', StatistikController::class)->middleware('auth');

//Admin Profil
Route::resource('struktur', StrukturController::class)->middleware('auth');
Route::resource('fasilitas', FasilitasController::class)->middleware('auth');
Route::resource('visimisi', VisiMisiController::class)->middleware('auth');
Route::resource('profil', ProfilController::class)->middleware('auth');
Route::resource('sejarah', SejarahController::class)->middleware('auth');
Route::resource('deskripsi', DeskripsiController::class)->middleware('auth');

// Admin PPDB
Route::resource('ppdb', PPDBController::class)->middleware('auth');
Route::resource('listppdb', ListppdbController::class)->middleware('auth');
Route::resource('addppdb', AddPPDBController::class)->middleware('auth');

// Admin Pendidikan
Route::resource('Prestasi', PrestasiController::class)->middleware('auth');
Route::resource('P5ra', P5raController::class)->middleware('auth');
Route::resource('Organisasi', OrganisasiController::class)->middleware('auth');
Route::resource('Ekstrakurikuler', EkstrakurikulerController::class)->middleware('auth');

// Admin Lainya
Route::resource('Berita', BeritaController::class)->middleware('auth');