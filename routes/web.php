<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('admin.layout.login');
});


Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.layout.dashboard');
    });
});



// Route::get('/dashboard', function () {
//     return view('admin/layout/dashboard');
// });

// Route untuk Kelola Kategori
Route::get('/admin/kategori', [AdminController::class, 'showKategoriPage'])->name('admin.kategori');
Route::get('/admin/add-kategori', [AdminController::class, 'showAddKategoriPage'])->name('admin.add-kategori-page');
Route::post('/admin/add-kategori', [AdminController::class, 'addKategoriAction'])->name('admin.add-kategori-action');
Route::get('/admin/edit-kategori/{id}', [AdminController::class, 'showEditKategoriPage'])->name('admin.edit-kategori-page');
Route::put('admin/edit-kategori/{id}', [AdminController::class, 'editKategoriAction'])->name('admin.edit-kategori-action');
Route::delete('admin/delete-kategori/{id}', [AdminController::class, 'deleteKategoriAction'])->name('admin.delete-kategori-action');

//Route untuk kelola Kriteria
Route::get('/admin/kriteria', [AdminController::class, 'showKriteriaPage'])->name('admin.kriteria');
Route::get('/admin/add-kriteria', [AdminController::class, 'showAddKriteriaPage'])->name('admin.add-kriteria-page');
Route::post('/admin/add-kriteria', [AdminController::class, 'addKriteriaAction'])->name('admin.add-kriteria-action');
Route::get('/admin/edit-kriteria/{id}', [AdminController::class, 'showEditKriteriaPage'])->name('admin.edit-kriteria-page');
Route::put('admin/edit-kriteria/{id}', [AdminController::class, 'editKriteriaAction'])->name('admin.edit-kriteria-action');
Route::delete('admin/delete-kriteria/{id}', [AdminController::class, 'deleteKriteriaAction'])->name('admin.delete-kriteria-action');

//Route untuk kelola Benefit
Route::get('/admin/benefit', [AdminController::class, 'showBenefitPage'])->name('admin.benefit');
Route::get('/admin/add-benefit', [AdminController::class, 'showAddBenefitPage'])->name('admin.add-benefit-page');
Route::post('/admin/add-benefit', [AdminController::class, 'addBenefitAction'])->name('admin.add-benefit-action');
Route::get('/admin/edit-benefit/{id}', [AdminController::class, 'showEditBenefitPage'])->name('admin.edit-benefit-page');
Route::put('admin/edit-benefit/{id}', [AdminController::class, 'editBenefitAction'])->name('admin.edit-benefit-action');
Route::delete('admin/delete-benefit/{id}', [AdminController::class, 'deleteBenefitAction'])->name('admin.delete-benefit-action');

// Route untuk Kelola Kegiatan
Route::get('/admin/kegiatan', [AdminController::class, 'showKegiatanPage'])->name('admin.kegiatan');
Route::get('/admin/add-kegiatan', [AdminController::class, 'showAddKegiatanPage'])->name('admin.add-kegiatan-page');
Route::get('/admin/detail-kegiatan/{id}', [AdminController::class, 'showDetailKegiatanPage'])->name('admin.detail-kegiatan-page');
Route::post('/admin/add-kegiatan', [AdminController::class, 'addKegiatanAction'])->name('admin.add-kegiatan-action');
Route::get('/admin/edit-kegiatan/{id}', [AdminController::class, 'showEditKegiatanPage'])->name('admin.edit-kegiatan-page');
Route::put('/admin/edit-kegiatan/{id}', [AdminController::class, 'editKegiatanAction'])->name('admin.edit-kegiatan-action');
Route::delete('admin/delete-kegiatan/{id}', [AdminController::class, 'deleteKegiatanAction'])->name('admin.delete-kegiatan-action');


// Route untuk Kelola Setting
Route::get('/admin/setting', [AdminController::class, 'showSettingPage'])->name('admin.setting');
Route::get('/admin/edit-setting/{id}', [AdminController::class, 'showEditSettingPage'])->name('admin.edit-setting-page');
Route::put('admin/edit-setting/{id}', [AdminController::class, 'editSettingAction'])->name('admin.edit-setting-action');