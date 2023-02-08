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
use App\Http\Controllers\Import\ImportGuruController;
use App\Http\Controllers\Import\ImportMapelController;
use App\Http\Controllers\Export\ExportGuruController;


use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Siswa\SiswaController;
use App\Http\Controllers\Siswa\PendaftaranController;

use App\Http\Controllers\Backend\LspController;

use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\UnitKompetensiController;
use App\Http\Controllers\Backend\AsesorController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('frontend.index');
// });


//FrontEnd

Route::get('/', [FrontendController::class,'FrontendHome'])->name('frontend.home');

// Route::controller(App\Http\Controllers\Auth\AuthOtpController::class)->group(function(){
//     Route::get('otp/login', 'login')->name('otp.login');
//     Route::post('otp/generate', 'generate')->name('otp.generate');
//     Route::get('otp/verification/{user_id}', 'verification')->name('otp.verification');
//     Route::post('otp/login', 'loginWithOtp')->name('otp.getlogin');
// });

Route::get('/siswa/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
});

require __DIR__.'/auth.php';
//==================================Awal Middleware Role Siswa========================================= 
    Route::middleware(['auth','role:admin'])->group(function(){
        Route::prefix('admin')->group(function(){
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
            Route::get('/dashboard', [AdminController::class,'AdminDashboard'])->name('admin.dashboard');
            Route::get('/logout', [AdminController::class,'AdminDestroy'])->name('admin.logout');
            Route::get('/profile', [AdminController::class,'AdminProfile'])->name('admin.profile');
            Route::post('/profile/store', [AdminController::class,'AdminProfileStore'])->name('admin.profile.store');
            Route::get('/change/password', [AdminController::class,'AdminChangePassword'])->name('admin.change.password');
            Route::post('/update/password', [AdminController::class,'AdminUpdatePassword'])->name('update.password');
            Route::get('/generete/user', [AdminController::class,'genereteUser'])->name('generete.user');
            
            //Route Presensi
            Route::get('/presensi/lihat',[PresensiController::class,'LihatPresensi'])->name('lihat.presensi');
            //Route ExportUser
            Route::get('/user/export',[UserController::class,'ExportUser'])->name('export.user');
            Route::get('/userrfid/export',[UserController::class,'ExportUserRfid'])->name('export.userrfid');
            Route::get('/template/userrfid/excel', [UserRfidController::class,'template_excel_userrfid'])->name('template.excel.user_rfid');
            //Route Import
            Route::get('/userrfid/lihat',[ImportController::class,'LihatImportUserRfid'])->name('lihat.import.userrfid');
            Route::post('/userrfid/import',[ImportController::class,'ImportUserRfid'])->name('import.userrfid');
            Route::get('/guru/lihat',[ImportController::class,'LihatImportGuru'])->name('lihat.import.guru');

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
            Route::get('/guru/tambah',[GuruController::class,'TambahGuru'])->name('tambah.guru');
            Route::get('/guru/edit/{id}',[GuruController::class,'EditGuru'])->name('edit.guru');
            Route::post('/guru/update/{id}',[GuruController::class,'UpdateGuru'])->name('update.guru');
            Route::post('/guru/simpan',[GuruController::class,'SimpanGuru'])->name('simpan.guru');
            Route::get('/guru/hapus/{id}',[GuruController::class,'HapusGuru'])->name('hapus.guru');
            Route::get('/template/guru/excel', [GuruController::class,'template_excel_guru'])->name('template.excel.guru');

            //Route Mapel
            Route::get('/mapel/lihat',[MapelController::class,'Index'])->name('lihat.mapel');
            Route::get('/template/mapel/excel', [MapelController::class,'template_excel_mapel'])->name('template.excel.mapel');

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
            Route::get('/rombel/hapus/{id}',[RombelController::class,'HapusRombel'])->name('hapus.rombel');
                
            //Route Group
            Route::get('/group/lihat',[GroupController::class,'LihatGroup'])->name('lihat.group');
            Route::get('/group/tambah',[GroupController::class,'TambahGroup'])->name('tambah.group');
            Route::post('/group/edit/{id}',[GroupController::class,'EditGroup'])->name('edit.group');
            Route::post('/group/simpan',[GroupController::class,'SimpanGroup'])->name('simpan.group');
            Route::get('/group/update/{id}',[GroupController::class,'UpdateGroup'])->name('update.group');
            Route::get('/group/hapus/{id}',[GroupController::class,'HapusGroup'])->name('hapus.group');
            
            //Route IMPORT
            Route::prefix('import')->group(function(){
                Route::post('/guru',[ImportGuruController::class,'importGuru'])->name('import.guru');
                Route::post('/mapel',[ImportMapelController::class,'importMapel'])->name('import.mapel');
            }); //End Group
            
            //ROUTE EXPORT
            Route::prefix('export')->group(function(){
                Route::get('/guru',[ExportGuruController::class,'ExportGuru'])->name('export.guru');
            }); //End Group
            Route::prefix('lsp')->group(function(){
                Route::get('/data',[LspController::class,'LihatDataLsp'])->name('data.lsp');
                Route::get('/data/hapus/{id}',[LspController::class,'HapusDataLsp'])->name('hapus.data.lsp');
                Route::get('/data/edit/{id}',[LspController::class,'EditDataLsp'])->name('edit.data.lsp');
                Route::get('/data/update/{id}',[LspController::class,'UpdateDataLsp'])->name('update.data.lsp');
            });

            Route::prefix('setting')->group(function(){
                Route::get('/lihat',[SettingController::class,'LihatSetting'])->name('lihat.setting');
                Route::get('/edit/{id}',[SettingController::class,'EditSetting'])->name('edit.setting');
                Route::post('/update/{id}',[SettingController::class,'UpdateSetting'])->name('update.setting');
            });//akhir Group Setting

            /*Asesor*/
            Route::prefix('asesor')->group(function(){
                Route::get('/lihat',[AsesorController::class,'LihatAsesor'])->name('lihat.asesor');
                Route::post('/simpan',[AsesorController::class,'SimpanAsesor'])->name('simpan.asesor');
                Route::get('/edit/{id}',[AsesorController::class,'EditAsesor'])->name('edit.asesor');
                Route::post('/update/{id}',[AsesorController::class,'UpdateAsesor'])->name('update.asesor');
            });//akhir Group Setting

            Route::prefix('uk')->group(function(){
                Route::get('/lihat',[UnitKompetensiController::class,'LihatUk'])->name('lihat.uk');
                Route::post('/simpan',[UnitKompetensiController::class,'SimpanUk'])->name('simpan.uk');
                Route::get('/edit/{id}',[UnitKompetensiController::class,'EditUk'])->name('edit.uk');
                Route::post('/update/{id}',[UnitKompetensiController::class,'UpdateUk'])->name('update.uk');
            });//akhir Group Setting
        }); //End Group Admin

    }); 
//==================================Akhir Middleware Role Siswa=========================================


//==================================Awal Middleware Role Siswa=========================================
    Route::middleware(['auth','role:siswa'])->group(function(){
            
        Route::prefix('siswa')->group(function(){
            Route::get('/dashboard',[SiswaController::class,'SiswaDashboard'])->name('siswa.dashboard');
                       
            Route::get('/profile', [SiswaController::class,'Profile'])->name('siswa.profile');
            Route::post('/profile/store', [SiswaController::class,'SiswaProfileStore'])->name('siswa.profile.store');
            Route::get('/logout', [SiswaController::class,'SiswaDestroy'])->name('siswa.logout');
            Route::get('/data',[SiswaController::class,'SiswaData'])->name('siswa.data');
            /*Formulis APL.02*/
            Route::get('/data/asesmen',[SiswaController::class,'SiswaDataAsesmen'])->name('siswa.data.asesmen');
            Route::post('/data/update', [SiswaController::class,'UpdateDataIsian'])->name('siswa.data.update');
            //Route::post('/data/update', [SiswaController::class,'UpdateData'])->name('siswa.data.update');
            Route::get('/upload/ktp', [SiswaController::class,'KtpSiswa'])->name('ktp.siswa');
            Route::post('/upload/ktp/simpan', [SiswaController::class,'UploadKtpSiswa'])->name('upload.ktp.siswa');
            Route::get('/upload/kk', [SiswaController::class,'KkSiswa'])->name('kk.siswa');
            Route::post('/upload/kk/simpan', [SiswaController::class,'UploadKkSiswa'])->name('upload.kk.siswa');
            Route::get('/upload/sertifikat', [SiswaController::class,'SertifikatSiswa'])->name('sertifikat.siswa');
            Route::post('/upload/sertifikat/simpan', [SiswaController::class,'UploadSertifikatSiswa'])->name('upload.sertifikat.siswa');

            //PDF
            Route::get('/pendaftaran/pdf', [SiswaController::class,'PendaftaranPdf'])->name('pendaftaran.pdf');
            Route::get('/pendaftaran-a/pdf', [SiswaController::class,'PendaftaranAdminPdf'])->name('pendaftaran.admin.pdf');
            Route::get('/pendaftaran-b/pdf/{id}', [SiswaController::class,'CetakPendaftaranAdmin'])->name('cetak.pendaftaran.admin');
        }); //End Group Siswa

    }); 
    
//==================================Akhir Middleware Role Siswa=========================================

Route::get('/admin/login', [AdminController::class,'AdminLogin'])->name('admin.login');
Route::get('/siswa/login', [SiswaController::class,'SiswaLogin'])->name('siswa.login');
Route::prefix('pendaftaran')->group(function(){

        //Route Sekolah
    Route::get('/siswa',[PendaftaranController::class,'Daftar'])->name('daftar');
    Route::post('/siswa/simpan',[PendaftaranController::class,'DaftarSimpan'])->name('simpan.pendaftaran.siswa');
}); //End Group Pendaftaran





