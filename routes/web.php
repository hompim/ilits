<?php

use App\Exports\OprecStaffExport;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OprecStaffController;
use App\Http\Controllers\LinkShortenerController;
use App\Http\Controllers\Peserta\PesertaController;
use App\Http\Controllers\FordaController;
use App\Http\Controllers\Peserta\dashboard\Home;
use App\Models\OprecStaff;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Chart\Layout;

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
    return view('coming-soon');
})->name('coming-soon');

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

// // Route::get('/oprec-staff', [OprecStaffController::class, 'index'])->name('oprec_staff');

// Route::get('/oprecstaffexport', [OprecStaffController::class, 'oprecStaffExport'])->name('oprecstaffexport');
// Route::post('/oprecstaffimport', [OprecStaffController::class, 'OprecStaffImport'])->name('oprecstaffimport');
// Route::post('/oprecmacimport', [OprecStaffController::class, 'OprecMacImport'])->name('oprecmacimport');

// Route untuk admin
Route::middleware('can:isAdmin')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('shortener/', [LinkShortenerController::class, 'create'])->name('link.create');
    Route::post('shortener/', [LinkShortenerController::class, 'store'])->name('link.store');
    Route::get('shortener/update/{id}', [LinkShortenerController::class, 'update'])->name('link.update');
    Route::post('shortener/update/{id}', [LinkShortenerController::class, 'storeUpdate'])->name('link.update.store');
    Route::post('shortener/delete/{id}', [LinkShortenerController::class, 'delete'])->name('link.delete');
});

//Route untuk Peserta
Route::prefix('peserta')->middleware('can:isPeserta')->group(function () {
    Route::prefix('welcome')->group(function () {
        Route::get('/', [PesertaController::class, 'index'])->name('peserta');
        Route::get('/upload', [PesertaController::class, 'UploadPage'])->name('peserta.upload');
        Route::get('/absensi', [PesertaController::class, 'absen'])->name('peserta.absen');
        Route::post('/absens/proses', [PesertaController::class, 'prosesAbsensi'])->name('peserta.proses.absen');
        Route::post('/welcome{id}', [PesertaController::class, 'welcome'])->name('peserta.welcome');
    });
});
// Route::get('/{slug}', [LinkShortenerController::class, 'redirectHandler'])->name('link.redirect');

// Route untuk forda
Route::prefix('forda')->middleware('can:isForda')->group(function () {
    Route::get('/', [FordaController::class, 'index'])->name('forda');
    Route::get('/absensi', [PesertaController::class, 'absensi'])->name('forda.absensi');
});
