<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'home']);
Route::get('/detail', [UserController::class, 'detailAbout']);

Route::view('/daftar', 'register', ['title' => "Daftar Akun"])->middleware('guest');
Route::post('/daftar', [UserController::class, 'createUser']);

Route::view('/masuk', 'login', ['title' => 'Masuk'])->middleware('guest');
Route::post('/masuk', [UserController::class, 'login']);
Route::post('/keluar', [UserController::class, 'logout']);

Route::view('/lupa-password', 'components.form.forgot-password', ['title' => "Lupa Password"]);
Route::post('/lupa-password', [UserController::class, 'forgotPassword']);
Route::get('/reset-password/{token}', [UserController::class, 'resetPassword'])->name('password.reset');

Route::view('/dashboard/user', 'dashboard-user', ['title' => 'Dashboard'])->middleware('auth');
Route::get('/dashboard/user/profile', [DashboardUserController::class, 'profile']);

Route::get('/dashboard/admin/news', [AdminController::class, 'admin'])->middleware('auth');
Route::view('/dashboard/buatBerita', 'components.form.add-news', ['title' => 'Buat Berita'])->middleware('auth');
Route::post('/dashboard/buatBerita', [AdminController::class, 'postNews']);

Route::get('/dashboard/detailBerita/{id}', [AdminController::class, 'detailNews'])->middleware('auth');
Route::get('/dashboard/ubahBerita/{id}', [AdminController::class, 'formUpdateNews'])->middleware('auth');
Route::patch('/dashboard/ubahBerita/{id}', [AdminController::class, 'updateNews']);
Route::delete('/dashboard/hapusBerita/{id}', [AdminController::class, 'deleteNews'])->middleware('auth');

Route::get('/dashboard/admin/jurusan', [AdminController::class, 'major']);
Route::view('/dashboard/tambahJurusan', 'components.form.add-major', ['title' => 'Tambah Jurusan']);
Route::post('/dashboard/tambahJurusan', [AdminController::class, 'postMajor']);
Route::post('/', [UserController::class, 'postContacts']);

Route::get('/dashboard/admin/kegiatan', [AdminController::class, 'activitiesView']);
Route::view('/dashboard/tambahKegiatan', 'components.form.add-activity', ['title' => 'Tambah Kegiatan']);
Route::post('/dashboard/tambahKegiatan', [AdminController::class, 'postActivity']);
Route::delete('/dashboard/hapusKegiatan/{selectedId}', [AdminController::class, 'deleteActivity']);

Route::get('/dashboard/admin/gallery', [AdminController::class, 'galleryView']);
Route::post('/dashboard/admin/gallery', [AdminController::class, 'postGallery']);
