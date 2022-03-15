<?php

use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\PesertaAsuransiController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PengumumanController;
use App\Models\Berita;

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

Route::get('/', [IndexController::class, 'dashboard'])->name('dashboard');

// BERITA //
Route::get('/berita/index', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/tambah', [BeritaController::class, 'viewTambahBerita'])->name('berita.tambah');
Route::post('/admin/berita/post', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita-tinymce', [BeritaController::class, 'berita_tinymce']);
Route::delete('/admin/berita/delete/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

Route::get('berita/all', [IndexController::class, 'berita_all'])->name('berita.all');
Route::get('berita/{slug}', [IndexController::class, 'berita'])->name('berita.satu');
// BERITA //

// PENGUMUMAN //
Route::get('/pengumuman/index', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/pengumuman/tambah', [PengumumanController::class, 'viewTambahPengumuman'])->name('pengumuman.tambah');
Route::post('/admin/pengumuman/post', [PengumumanController::class, 'create'])->name('pengumuman.create');
Route::post('/pengumuman-tinymce', [PengumumanController::class, 'pengumuman_tinymce']);
Route::delete('/admin/pengumuman/delete/{id}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');

Route::get('pengumuman/all', [IndexController::class, 'pengumuman_all'])->name('pengumuman.all');
Route::get('pengumuman/{slug}', [IndexController::class, 'pengumuman'])->name('pengumuman.satu');
// PENGUMUMAN //

// PROFIL //
Route::get('/profil/index', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/profil/tambah', [ProfilController::class, 'viewTambahProfil'])->name('profil.tambah');
Route::post('/admin/profil/post', [ProfilController::class, 'create'])->name('profil.create');
Route::post('/profil-tinymce', [ProfilController::class, 'profil_tinymce']);
Route::delete('/admin/profil/delete/{id}', [ProfilController::class, 'destroy'])->name('profil.destroy');

Route::get('profil/all', [IndexController::class, 'profil_all'])->name('profil.all');
Route::get('profil/{slug}', [IndexController::class, 'profil'])->name('profil.satu');
// PROFIL //

Route::get('/admin', [PesertaAsuransiController::class, 'dashboard'])->name('admin');

// PESERTA ASURANSI //
Route::get('/peserta/index', [PesertaAsuransiController::class, 'index'])->name('index.peserta');
Route::get('/peserta/tambah', [PesertaAsuransiController::class, 'viewTambahPeserta'])->name('tambah.peserta');
Route::post('/peserta/post', [PesertaAsuransiController::class, 'tambah'])->name('post.peserta');
Route::get('/peserta/meninggal/{id}', [PesertaAsuransiController::class, 'viewPesertaMeninggal'])->name('view.peserta.meninggal');
Route::post('/peserta/meninggal/post/{id}', [PesertaAsuransiController::class, 'tglMeninggal'])->name('post.peserta.meninggal');

// VERIFIKASI ASURANSI //
Route::get('/asuransi/index', [PesertaAsuransiController::class, 'index_asuransi'])->name('index.asuransi');
Route::get('/asuransi/verifikasi_asuransi/{id}', [PesertaAsuransiController::class, 'viewVerifikasiPesertaAsuransi'])->name('view.verifikasi.asuransi');
Route::post('/asuransi/verifikasi_asuransi/update/{id}', [PesertaAsuransiController::class, 'verifikasiPesertaAsuransi'])->name('verifikasi.asuransi');

// VERIFIKASI DINSOS //
Route::get('/dinsos/index', [PesertaAsuransiController::class, 'index_dinsos'])->name('index.dinsos');
Route::get('/dinsos/verifikasi_dinsos/{id}', [PesertaAsuransiController::class, 'viewVerifikasiPesertaDinsos'])->name('view.verifikasi.peserta');
Route::post('/dinsos/verifikasi_dinsos/update/{id}', [PesertaAsuransiController::class, 'verifikasiPesertaDinsos'])->name('verifikasi.dinsos');
