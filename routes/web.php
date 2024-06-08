<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin;

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
    return view('admin/layout/login');
});

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'login_action'])->name('login_action');


Route::get('/dashboard', function () {
    return view('admin/layout/dashboard');
});

// Route untuk Kelola Kategori
Route::get('/admin/kategori', [Admin::class, 'showKategoriPage'])->name('admin.kategori');
Route::get('/admin/add-kategori', [Admin::class, 'showAddKategoriPage'])->name('admin.add-kategori-page');
Route::post('/admin/add-kategori', [Admin::class, 'addKategoriAction'])->name('admin.add-kategori-action');
Route::get('/admin/edit-kategori/{id}', [Admin::class, 'showEditKategoriPage'])->name('admin.edit-kategori-page');
Route::put('admin/edit-kategori/{id}', [Admin::class, 'editKategoriAction'])->name('admin.edit-kategori-action');
Route::delete('admin/delete-kategori/{id}', [Admin::class, 'deleteKategoriAction'])->name('admin.delete-kategori-action');

//Route untuk kelola Kriteria
Route::get('/admin/kriteria', [Admin::class, 'showKriteriaPage'])->name('admin.kriteria');
Route::get('/admin/add-kriteria', [Admin::class, 'showAddKriteriaPage'])->name('admin.add-kriteria-page');
Route::post('/admin/add-kriteria', [Admin::class, 'addKriteriaAction'])->name('admin.add-kriteria-action');
Route::get('/admin/edit-kriteria/{id}', [Admin::class, 'showEditKriteriaPage'])->name('admin.edit-kriteria-page');
Route::put('admin/edit-kriteria/{id}', [Admin::class, 'editKriteriaAction'])->name('admin.edit-kriteria-action');
Route::delete('admin/delete-kriteria/{id}', [Admin::class, 'deleteKriteriaAction'])->name('admin.delete-kriteria-action');

//Route untuk kelola Benefit
Route::get('/admin/benefit', [Admin::class, 'showBenefitPage'])->name('admin.benefit');
Route::get('/admin/add-benefit', [Admin::class, 'showAddBenefitPage'])->name('admin.add-benefit-page');
Route::post('/admin/add-benefit', [Admin::class, 'addBenefitAction'])->name('admin.add-benefit-action');
Route::get('/admin/edit-benefit/{id}', [Admin::class, 'showEditBenefitPage'])->name('admin.edit-benefit-page');
Route::put('admin/edit-benefit/{id}', [Admin::class, 'editBenefitAction'])->name('admin.edit-benefit-action');
Route::delete('admin/delete-benefit/{id}', [Admin::class, 'deleteBenefitAction'])->name('admin.delete-benefit-action');

// Route untuk Kelola Kegiatan
Route::get('/admin/kegiatan', [Admin::class, 'showKegiatanPage'])->name('admin.kegiatan');
Route::get('/admin/add-kegiatan', [Admin::class, 'showAddKegiatanPage'])->name('admin.add-kegiatan-page');
Route::post('/admin/add-kegiatan', [Admin::class, 'addKegiatanAction'])->name('admin.add-kegiatan-action');