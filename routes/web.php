<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\UserRfidController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Jurusan\JurusanController;
use App\Http\Controllers\Kelas\KelasController;
use App\Http\Controllers\TahunAjaran\TahunAjaranController;
use App\Http\Controllers\Rombel\RombelController;
use App\Http\Controllers\Group\GroupController;
use App\Http\Controllers\Import\ImportController;


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
    return view('welcome');
});

Route::controller(App\Http\Controllers\Auth\AuthOtpController::class)->group(function(){
    Route::get('otp/login', 'login')->name('otp.login');
    Route::post('otp/generate', 'generate')->name('otp.generate');
    Route::get('otp/verification/{user_id}', 'verification')->name('otp.verification');
    Route::post('otp/login', 'loginWithOtp')->name('otp.getlogin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function(){
        //Route Dahboard
    //Route::get('/admin/dashboard',[DahboardController::class,'AdminDashboard'])->name('admin.dashboard');
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', [AdminController::class,'AdminDashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminController::class,'AdminDestroy'])->name('admin.logout');
        Route::get('/profile', [AdminController::class,'AdminProfile'])->name('admin.profile');
        Route::post('/profile/store', [AdminController::class,'AdminProfileStore'])->name('admin.profile.store');
        Route::get('/change/password', [AdminController::class,'AdminChangePassword'])->name('admin.change.password');
        Route::post('/update/password', [AdminController::class,'AdminUpdatePassword'])->name('update.password');


        //Route Presensi
        Route::get('/presensi/lihat',[PresensiController::class,'LihatPresensi'])->name('lihat.presensi');

        //Route ExportUser
        Route::get('/user/export',[UserController::class,'ExportUser'])->name('export.user');
        Route::get('/userrfid/export',[UserController::class,'ExportUserRfid'])->name('export.userrfid');

        //Route Import
        Route::get('/userrfid/lihat',[ImportController::class,'LihatImportUserRfid'])->name('lihat.import.userrfid');
        Route::get('/guru/lihat',[ImportController::class,'LihatImportGuru'])->name('lihat.import.guru');
        Route::post('/userrfid/import',[ImportController::class,'ImportUserRfid'])->name('import.userrfid');
    }); //End Group

    Route::prefix('setup')->group(function(){

        //Route Sekolah
        Route::get('/sekolah',[SekolahController::class,'Sekolah'])->name('sekolah');
        Route::post('/update/sekolah/',[SekolahController::class,'UpdateSekolah'])->name('update.sekolah');


        Route::get('/agama/lihat',[AgamaController::class,'Agama'])->name('lihat.agama');
        Route::get('/agama/tambah',[AgamaController::class,'TambahAgama'])->name('tambah.agama');
        Route::get('/agama/edit/{id}',[AgamaController::class,'EditAgama'])->name('edit.agama');
        Route::post('/agama/update/{id}',[AgamaController::class,'UpdateAgama'])->name('update.agama');
        Route::post('/agama/simpan',[AgamaController::class,'SimpanAgama'])->name('simpan.agama');
        Route::get('/agama/hapus/{id}',[AgamaController::class,'HapusAgama'])->name('hapus.agama');

        Route::get('/user/lihat',[UserRfidController::class,'Index'])->name('lihat.user');

        //Route Guru
        Route::get('/guru/lihat',[GuruController::class,'Index'])->name('lihat.guru');

        //Route Mapel
        Route::get('/mapel/lihat',[MapelController::class,'Index'])->name('lihat.mapel');

        //Route Jurusan
        Route::get('/jurusan/lihat',[JurusanController::class,'LihatJurusan'])->name('lihat.jurusan');
        Route::get('/jurusan/tambah',[JurusanController::class,'TambahJurusan'])->name('tambah.jurusan');
        Route::get('/jurusan/edit/{id}',[JurusanController::class,'EditJurusan'])->name('edit.jurusan');
        Route::post('/jurusan/update/{id}',[JurusanController::class,'UpdateJurusan'])->name('update.jurusan');
        Route::post('/jurusan/simpan',[JurusanController::class,'SimpanJurusan'])->name('simpan.jurusan');
        Route::get('/jurusan/hapus/{id}',[JurusanController::class,'HapusJurusan'])->name('hapus.jurusan');

        //Route Kelas
        Route::get('/kelas/lihat',[KelasController::class,'LihatKelas'])->name('lihat.kelas');
        Route::get('/kelas/tambah',[KelasController::class,'TambahKelas'])->name('tambah.kelas');
        Route::get('/kelas/edit/{id}',[KelasController::class,'EditKelas'])->name('edit.kelas');
        Route::post('/kelas/update/{id}',[KelasController::class,'UpdateKelas'])->name('update.kelas');
        Route::post('/kelas/simpan',[KelasController::class,'SimpanKelas'])->name('simpan.kelas');
        Route::get('/kelas/hapus/{id}',[KelasController::class,'HapusKelas'])->name('hapus.kelas');

        //Route Tahun Ajaran
        Route::get('/kelas/pembelajaran',[TahunAjaranController::class,'LihatTahunAjaran'])->name('lihat.tahunajaran');

        //Route Rombongan Belajar
        Route::get('/rombel/lihat',[RombelController::class,'LihatRombel'])->name('lihat.rombel');
        Route::get('/rombel/tambah',[RombelController::class,'TambahRombel'])->name('tambah.rombel');
        Route::post('/rombel/edit/{id}',[RombelController::class,'EditRombel'])->name('edit.rombel');
        Route::post('/rombel/simpan',[RombelController::class,'SimpanRombel'])->name('simpan.rombel');
        Route::get('/rombel/update/{id}',[RombelController::class,'UpdateRombel'])->name('update.rombel');
        Route::post('/rombel/hapus/{id}',[RombelController::class,'HapusRombel'])->name('hapus.rombel');

        //Route Group
        Route::get('/group/lihat',[GroupController::class,'LihatGroup'])->name('lihat.group');
        Route::get('/group/tambah',[GroupController::class,'TambahGroup'])->name('tambah.group');
        Route::post('/group/edit/{id}',[GroupController::class,'EditGroup'])->name('edit.group');
        Route::post('/group/simpan',[GroupController::class,'SimpanGroup'])->name('simpan.group');
        Route::get('/group/update/{id}',[GroupController::class,'UpdateGroup'])->name('update.group');
        Route::post('/group/hapus/{id}',[GroupController::class,'HapusGroup'])->name('hapus.group');


        

    }); //End Group

}); //End Middleware


Route::middleware(['auth','role:user'])->group(function(){
    Route::get('/user/dashboard', [VendorController::class,'VendorDashboard'])->name('vendor.dashboard');
});

Route::get('/admin/login', [AdminController::class,'AdminLogin'])->name('admin.login');



