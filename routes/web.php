<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\Admin;

Route::get('/', function () {
    return view('admin.layout.login');
});


Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard/{id}', [AdminController::class, 'showDashboard'])->name('admin.dashboard');
});


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

// Route untuk Kelola Skill
Route::get('/admin/skill', [AdminController::class, 'showSkillPage'])->name('admin.skill');
Route::get('/admin/add-skill', [AdminController::class, 'showAddSkillPage'])->name('admin.add-skill-page');
Route::post('/admin/add-skill', [AdminController::class, 'addSkillAction'])->name('admin.add-skill-action');
Route::get('/admin/edit-skill/{id}', [AdminController::class, 'showEditSkillPage'])->name('admin.edit-skill-page');
Route::put('admin/edit-skill/{id}', [AdminController::class, 'editSkillAction'])->name('admin.edit-skill-action');
Route::delete('admin/delete-skill/{id}', [AdminController::class, 'deleteSkillAction'])->name('admin.delete-skill-action');

// Route untuk Kelola Pendaftar
Route::get('/admin/pendaftar', [AdminController::class, 'showPendaftarPage'])->name('admin.pendaftar');
Route::get('/admin/detail-pendaftar/{id}', [AdminController::class, 'showDetailPendaftarPage'])->name('admin.detail.pendaftar');
Route::patch('/admin/pendaftar/{id}/update-status', [AdminController::class, 'updateStatus'])->name('admin.updateStatus');

// Route untuk Kelola Kegiatan
Route::get('/admin/kegiatan', [AdminController::class, 'showKegiatanPage'])->name('admin.kegiatan');
Route::get('/admin/add-kegiatan', [AdminController::class, 'showAddKegiatanPage'])->name('admin.add-kegiatan-page');
Route::get('/admin/detail-kegiatan/{id}', [AdminController::class, 'showDetailKegiatanPage'])->name('admin.detail-kegiatan-page');
Route::post('/admin/add-kegiatan', [AdminController::class, 'addKegiatanAction'])->name('admin.add-kegiatan-action');
Route::get('/admin/edit-kegiatan/{id}', [AdminController::class, 'showEditKegiatanPage'])->name('admin.edit-kegiatan-page');
Route::put('/admin/edit-kegiatan/{id}', [AdminController::class, 'editKegiatanAction'])->name('admin.edit-kegiatan-action');
Route::delete('admin/delete-kegiatan/{id}', [AdminController::class, 'deleteKegiatanAction'])->name('admin.delete-kegiatan-action');

Route::get('/admin/add-benefit-kegiatan/{id}', [AdminController::class, 'showAddBenefitKegiatanPage'])->name('admin.add-benefit-kegiatan-page');
Route::post('admin/add-benefit-kegiatan/{id}', [AdminController::class, 'addBenefitKegiatanAction'])->name('admin.add-benefit-kegiatan-action');
Route::delete('/admin/{id}/remove-benefit/{id_benefit}', [AdminController::class, 'removeBenefit'])->name('admin.remove-benefit-action');

Route::get('/admin/add-kriteria-kegiatan/{id}', [AdminController::class, 'showAddKriteriaKegiatanPage'])->name('admin.add-kriteria-kegiatan-page');
Route::post('admin/add-kriteria-kegiatan/{id}', [AdminController::class, 'addKriteriaKegiatanAction'])->name('admin.add-kriteria-kegiatan-action');
Route::delete('/admin/{id}/remove-kriteria/{id_kriteria}', [AdminController::class, 'removeKriteria'])->name('admin.remove-kriteria-action');

// Route untuk Kelola User
Route::get('/admin/user', [AdminController::class, 'showUserPage'])->name('admin.user');
Route::get('/admin/detail-user/{id}', [AdminController::class, 'showDetailUserPage'])->name('admin.detail-user-page');

// Route untuk Kelola Setting
Route::get('/admin/setting', [AdminController::class, 'showSettingPage'])->name('admin.setting');
Route::get('/admin/edit-setting/{id}', [AdminController::class, 'showEditSettingPage'])->name('admin.edit-setting-page');
Route::put('admin/edit-setting/{id}', [AdminController::class, 'editSettingAction'])->name('admin.edit-setting-action');



// Route 
// Untuk
// User  

Route::get('/user/login', [AuthController::class, 'showLoginUser'])->name('user.login');
Route::post('/user/login', [AuthController::class, 'loginUser'])->name('user.login.action');
Route::get('/user/register', [AuthController::class, 'showRegisterUser'])->name('user.register');
Route::post('/user/register', [AuthController::class, 'registerUserAction'])->name('user.register.action');
Route::get('/user/logout', [AuthController::class, 'logoutUser'])->name('user.logout');

Route::middleware('auth')->group(function () {
    Route::get('/user/daftar-volunteer', function () {
        return view('user.layout.daftar-volunteer');
    });

    // (User) Route untuk Daftar Kegiatan
    Route::get('/user/kegiatan/{id}', [UserController::class, 'showDaftarKegiatanPage'])->name('daftar.kegiatan');

    // (User) Route untuk Detail User
    Route::get('/user/detail-profile/{id}', [UserController::class, 'showDetailUserPage'])->name('user.detail-profile-page');
    Route::get('/user/edit-detail/{id}', [UserController::class, 'showEditUserPage'])->name('user.edit-profile-page');
    Route::put('user/edit-detail/{id}', [UserController::class, 'editUserAction'])->name('user.edit-profile-action');
    Route::put('user/edit-foto-profile/{id}', [UserController::class, 'editFotoProfileAction'])->name('user.edit-foto-profile-action');
    Route::get('/user/edit-akun/{id}', [UserController::class, 'showEditAkunPage'])->name('user.edit-akun-page');
    Route::put('user/edit-akun/{id}', [UserController::class, 'editAkunAction'])->name('user.edit-akun-action');
    Route::get('/user/edit-skill/{id}', [UserController::class, 'showEditSkillPage'])->name('user.edit-skill-page');
    Route::post('user/add-skill/{id}', [UserController::class, 'addSkillAction'])->name('user.add-skill-action');
    Route::delete('/user/{id}/remove-skill/{id_skill}', [UserController::class, 'removeSkill'])->name('user.remove-skill-action');

    // (User) Route untuk Detail Kegiatan
    Route::get('/user/{id}/detail-kegiatan/{id_kegiatan}', [UserController::class, 'showDetailKegiatanPage'])->name('user.detail-kegiatan-page');
});

// (User) Route untuk Daftar Kegiatan
Route::post('user/{id}/add-pendaftaran/{id_kegiatan}', [UserController::class, 'addPendaftaranAction'])->name('user.add-pendaftaran-action');

// (User) Navigasi
Route::get('/home', [UserController::class, 'showHomePage'])->name('user.home');
Route::get('/daftarKegiatan', [UserController::class, 'showDaftarKegiatan'])->name('user.daftarKegiatan');


Route::get('/user/detail-kegiatan/{id_kegiatan}', [UserController::class, 'showDetailKegiatan'])->name('user.detail-kegiatan');

Route::get('/signup', function () {
    return view('user/layout/signup');
});
// Route::get('/profile', function () {
//     return view('user/layout/profile');
// });
// Route::get('/daftarVolunteer', function () {
//     return view('user/layout/daftar-volunteer');
// });
// Route::get('/detailKegiatan', function () {
//     return view('user/layout/detail-kegiatan');
// });
// Route::get('/editDataDiri', function () {
//     return view('user/layout/edit-data-diri');
// });
// Route::get('/editPengaturanAkun', function () {
//     return view('user/layout/edit-pengaturan-akun');
// });
// Route::get('/editSkill', function () {
//     return view('user/layout/edit-skill');
// });