<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDaftarKegiatanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordResetLinkController;
use App\Http\Middleware\PreventBackHistory;
use App\Http\Controllers\ClusteringController;

use Illuminate\Support\Facades\Auth;

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
    return redirect('/login');
});


Route::middleware(['middleware' => 'guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    // Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
    Route::post('/register', [LoginController::class, 'store']);
    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('/update-password', [PasswordResetLinkController::class, 'store'])->name('password.update');
});

Route::post('/logout', [LoginController::class, 'logout']);
// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('districts', [ClusteringController::class, 'showDistricts']);
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('DaftarEntri', [AdminController::class, 'entrian'])->name('admin.dashboard.DaftarEntri');
    Route::get('entriexcel', [AdminController::class, 'entriexcel'])->name('admin.dashboard.entriexcel');
    Route::get('daftartabel', [AdminController::class, 'daftartabel'])->name('admin.daftartabel');

    Route::get('daftarkegiatan/hasil/{kodetabel}', [AdminDaftarKegiatanController::class, 'hasil'])->name('admin.daftarkegiatan.hasil');
    Route::get('daftarkegiatan/hasil/{kodetabel}/{kodeinstansi}', [AdminDaftarKegiatanController::class, 'downloadhasil'])->name('admin.daftarkegiatan.hasil.download');

    Route::get('daftarkegiatan', [AdminDaftarKegiatanController::class, 'index'])->name('admin.daftarkegiatan');
    Route::get('daftarkegiatan/tambah', [AdminDaftarKegiatanController::class, 'create'])->name('admin.tambahkegiatan');
    Route::post('daftarkegiatan/storingdata', [AdminDaftarKegiatanController::class, 'store'])->name('admin.storekegiatan');
    Route::get('daftarkegiatan/{id}/edit', [AdminDaftarKegiatanController::class, 'edit'])->name('admin.edit');
    Route::get('daftarkegiatan/{id}/update', [AdminDaftarKegiatanController::class, 'update'])->name('admin.updatekegiatan');

    Route::put('daftarkegiatan/{id}/update-status', [AdminDaftarKegiatanController::class, 'updateStatus'])->name('admin.update-status');
    Route::delete('daftarkegiatan/{id}', [AdminDaftarKegiatanController::class, 'destroy'])->name('admin.destroy');



    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('new', [AdminController::class, 'new'])->name('admin.new');
    Route::get('settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::get('daftarinstansi', [AdminController::class, 'instansi'])->name('admin.dashboard.daftarinstansi');
    Route::post('/addall', [AdminController::class, 'store'])->name('admin.tambahsemua');
    Route::post('/deleteall', [AdminController::class, 'bulkDelete'])->name('admin.bulkDelete');
    Route::get('view/{type}', [AdminController::class, 'viewtabel'])->name('admin.daftartabel.view');
    Route::get('edit/{type}/{id}', [AdminController::class, 'edit']);
    Route::post('update/{type}/{id}', [AdminController::class, 'update']);
    Route::post('update-profile-info', [AdminController::class, 'updateInfo'])->name('AdminUpdateInfo');
    Route::post('change-profile-picture', [AdminController::class, 'updatePicture'])->name('AdminUpdatePicture');
    Route::post('change-password', [AdminController::class, 'changePassword'])->name('AdminChangePassword');
});

Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('DaftarEntri', [UserController::class, 'entrian'])->name('user.dashboard.DaftarEntri');

    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('settings', [UserController::class, 'settings'])->name('user.settings');
    Route::get('edit/{type}/{id}', [UserController::class, 'edit']);
    Route::post('update/{type}/{id}', [UserController::class, 'update']);
    Route::post('update-profile-info', [UserController::class, 'updateInfo'])->name('UserUpdateInfo');
    Route::post('change-profile-picture', [UserController::class, 'updatePicture'])->name('UserUpdatePicture');
    Route::post('change-password', [UserController::class, 'changePassword'])->name('UserChangePassword');
    Route::post('upload-pengajuan', [UserController::class, 'uploadExcel'])->name('UserUploadPengajuan');
    Route::get('/excels', [UserController::class, 'listExcels'])->name('listExcels');
    // Route::get('/download-excel/{id}', [UserController::class, 'downloadExcel'])->name('downloadExcel');

    Route::post('upload-entriexcel/{id}', [UserController::class, 'uploadEntriExcel'])->name('UserUploadEntriexcel');
    Route::get('/entriexcel', [UserController::class, 'listEntriExcels'])->name('listEntriExcels');
    Route::get('/download-excel/{kodetabel}', [UserController::class, 'downloadEntriExcel'])->name('downloadEntriExcel');
});
