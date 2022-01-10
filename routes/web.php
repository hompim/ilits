<?php

use App\Exports\OprecStaffExport;
use App\Exports\PesertaFnD;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminMainEventController;
use App\Http\Controllers\OprecStaffController;
use App\Http\Controllers\LinkShortenerController;
use App\Http\Controllers\OpenCampusController;
use App\Http\Controllers\Peserta\PesertaController;
use App\Http\Controllers\FordaController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EventualController;
use App\Http\Controllers\Peserta\dashboard\Home;
use App\Http\Controllers\PesertaOpenCampusController;
use App\Models\OprecStaff;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Chart\Layout;
use App\Services\FnDService;
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

//Route web informasi
Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('fasilitas', [FasilitasController::class,'index'])->name('fasilitas');
Route::get('fakultas/{slug}', [FakultasController::class, 'index'])->name('fakultas');
Route::get('departemen/{slug}', [DepartemenController::class, 'index'])->name('departemen');
Route::get('merchandise', [MerchController::class,'index'])->name('merch');
Route::get('team', function(){return view('team');});
Route::get('beasiswa', [BeasiswaController::class,'index'])->name('beasiswa');
Route::get('eventual', function(){return view('eventual');})->name('eventual');
Route::get('alumni', [AlumniController::class, 'show'])->name('alumni');

//API
Route::get('choose-fakultas/{id}', [MainController::class, 'chooseFakultas'])->name('choose-fakultas');
Route::get('choose-event/{id}',[EventualController::class,'chooseEvent'])->name('choose-event');

Route::prefix('open-campus')->middleware('ispeserta')->group(function(){
    //FnD
    Route::prefix('fnd')->group(function(){
        Route::get('register', [OpenCampusController::class, 'registerFND'])->name('open-campus.fnd.register');
        // Route::get('register/form', function(){return view('open-campus.fnd-regist',["title" => "Form Pendaftaran"]);})->name('open-campus.fnd.register-form');
        Route::post('register/form/store', [OpenCampusController::class, 'regisFNDFormStore'])->name('open-campus.fnd.register-form.store');
        Route::get('register/fakultas', [OpenCampusController::class, 'fakultas'])->name('open-campus.fnd.fakultas');
        Route::get('register/departemen', [OpenCampusController::class, 'opsi'])->name('open-campus.opsi');
        Route::post('register/departemen/store', [OpenCampusController::class, 'storeDep'])->name('open-campus.store-dep');
        Route::get('thank-you', [OpenCampusController::class, 'thxFND'])->name('open-campus.thank-you');
    });

    //API
    Route::get('choose-fnd', [OpenCampusController::class, 'chooseFnD'])->name('open-campus.choose-fnd');
    Route::get('departemen/{sesi2}/{sesi3}/{sesi4}/{sesi5}', [OpenCampusController::class, 'choosenFnD'])->name('open-campus.api-departemen');
    Route::get('kuota/{id}', [OpenCampusController::class, 'detailKuota'])->name('open-campus.api-kuota');

    //ITS Fair
    Route::prefix('its-fair')->group(function(){
        // Route::get('register', [OpenCampusController::class, 'registerIF'])->name('open-campus.its-fair.register');
        // Route::get('register/form', function(){return view('open-campus.its-fair-regist',["title" => "Form Pendaftaran"]);})->name('open-campus.its-fair.register-form');
        // Route::post('register/form/store', [OpenCampusController::class, 'regisIFFormStore'])->name('open-campus.its-fair.register-form.store');
        // Route::get('thank-you', [OpenCampusController::class, 'thxIF'])->name('open-campus.its-fair.thank-you');
    });

    Route::prefix('odl')->group(function(){
        Route::get('register', [OpenCampusController::class, 'register_index'])->name('open-campus.odl.register');
        // Route::get('register/form', function(){return view('open-campus.event-regist',["title" => "Form Pendaftaran"]);})->name('open-campus.odl.register-form');
        Route::post('register/form/store', [OpenCampusController::class, 'regisFormStore'])->name('open-campus.odl.register-form.store');
        Route::get('register/kelas', [OpenCampusController::class, 'regisKelas'])->name('open-campus.odl.register-kelas');
        Route::post('register/kelas/store', [OpenCampusController::class, 'regisKelasStore'])->name('open-campus.odl.register-kelas.store');
        Route::get('thank-you', [OpenCampusController::class, 'thxODL'])->name('open-campus.odl.thank-you');
        Route::get('kelas/{sesi1}/{sesi2}/{sesi3}/{sesi4}', [OpenCampusController::class, 'kelasODL'])->name('open-campus.odl.api.kelas');
        Route::get('kuota/{id}', [OpenCampusController::class, 'detailKuotaODL'])->name('open-campus.odl.api.kuota');
    });
});

// Route untuk admin
Route::middleware('isadmin')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('shortener/', [LinkShortenerController::class, 'create'])->name('link.create');
    Route::post('shortener/', [LinkShortenerController::class, 'store'])->name('link.store');
    Route::get('shortener/update/{id}', [LinkShortenerController::class, 'update'])->name('link.update');
    Route::post('shortener/update/{id}', [LinkShortenerController::class, 'storeUpdate'])->name('link.update.store');
    Route::post('shortener/delete/{id}', [LinkShortenerController::class, 'delete'])->name('link.delete');
    Route::get('main-event/fnd', [AdminMainEventController::class, 'fnd'])->name('admin.fnd');
    Route::get('main-event/odl', [AdminMainEventController::class, 'odl'])->name('admin.odl');
    Route::get('main-event/its-fair', [AdminMainEventController::class, 'itsFair'])->name('admin.its-fair');
    Route::get('main-event/welcome', [AdminMainEventController::class, 'welcome'])->name('admin.welcome');
    Route::get('main-event/welcome/all', [AdminMainEventController::class, 'welcomeAll'])->name('admin.welcome-all');
    Route::get('main-event/welcome/{id}', [AdminMainEventController::class, 'welcomeForda'])->name('admin.welcome-detail');
});

//Route untuk Peserta
Route::prefix('peserta')->middleware('ispeserta')->group(function () {
    Route::prefix('welcome')->group(function () {
        Route::get('/', [PesertaController::class, 'index'])->name('peserta');
        Route::get('/upload', [PesertaController::class, 'UploadPage'])->name('peserta.upload');
        // Route::get('/absensi', [PesertaController::class, 'absen'])->name('peserta.absen');
        Route::post('/absens/proses', [PesertaController::class, 'prosesAbsensi'])->name('peserta.proses.absen');
        Route::get('/daftar', [PesertaController::class, 'registerWelcome'])->name('peserta.welcome.register');
        Route::post('/daftar', [PesertaController::class, 'storeWelcome'])->name('peserta.welcome.store');
        Route::post('/upload/bukti', [PesertaController::class, 'UploadBukti'])->name('peserta.postupload.bukti');
        Route::get('/video-pembahasan', [PesertaController::class, 'videoPembahasan'])->name('peserta.welcome.video-pembahasan');
    });
    Route::get('/fnd', [PesertaOpenCampusController::class, 'indexFND'])->name('peserta.open-campus.dashboard-fnd');
    Route::get('/odl', [PesertaOpenCampusController::class, 'indexODL'])->name('peserta.open-campus.dashboard-odl');
    Route::get('/its-fair', [PesertaOpenCampusController::class, 'indexITSFair'])->name('peserta.open-campus.its-fair');
});

// Route untuk forda
Route::prefix('forda')->middleware('isforda')->group(function () {
    Route::get('/', [FordaController::class, 'index'])->name('forda');
    Route::get('/absensi', [FordaController::class, 'absensi'])->name('forda.absensi');
    Route::get('/edit-biaya', [FordaController::class, 'editBiaya'])->name('forda.edit-biaya');
    Route::post('/edit-biaya', [FordaController::class, 'storeBiaya'])->name('forda.edit-biaya.store');
    Route::get('/edit-grup', [FordaController::class, 'indexEditGrup'])->name('forda.edit-grup');
    Route::post('/edit-grup', [FordaController::class, 'storeEditGrup'])->name('forda.edit-grup.store');
    Route::get('/edit-sesi', [FordaController::class, 'indexJadwalWelcome'])->name('forda.edit-sesi');
    Route::post('/edit-sesi', [FordaController::class, 'storeJadwalWelcome'])->name('forda.edit-sesi.store');
    Route::get('/edit-pj', [FordaController::class, 'editPJ'])->name('forda.edit-pj');
    Route::post('/edit-pj', [FordaController::class, 'storePJ'])->name('forda.edit-pj.store');
    Route::get('/link-meet', [FordaController::class, 'LinkMeetPage'])->name('forda.link-meet-page');
    Route::post('/link-meet', [FordaController::class, 'UpdateLinkMeet'])->name('forda.link-meet-post');
    Route::get('/verif-bayar', [FordaController::class, 'indexVerifBayar'])->name('forda.verif-bayar');
    Route::post('/verif-bayar/terima', [FordaController::class, 'verifBayar'])->name('forda.terima-bayar');
    Route::post('/verif-bayar/tolak', [FordaController::class, 'tolakBayar'])->name('forda.tolak-bayar');
    Route::get('/detailBayar/{id}', [FordaController::class, 'detailBayar'])->name('forda.detail-bayar');
});

Route::get('/{slug}', [LinkShortenerController::class, 'redirectHandler'])->name('link.redirect');



