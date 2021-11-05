<?php

use App\Exports\OprecStaffExport;
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
    return view('department-page');
})->name('coming-soon');

// // Route::get('/oprec-staff', [OprecStaffController::class, 'index'])->name('oprec_staff');

// Route::get('/oprecstaffexport', [OprecStaffController::class, 'oprecStaffExport'])->name('oprecstaffexport');
// Route::post('/oprecstaffimport', [OprecStaffController::class, 'OprecStaffImport'])->name('oprecstaffimport');
// Route::post('/oprecmacimport', [OprecStaffController::class, 'OprecMacImport'])->name('oprecmacimport');

// Route untuk admin
Route::middleware('isadmin')->prefix('admin')->group(function () {
    Route::get('/', function () {
        if (request()->user()->user_type == 'App\Models\Peserta') {
            return redirect(route('peserta.dashboard'));
        } else if (request()->user()->user_type == 'App\Models\Forda') {
            return redirect(route('forda'));
        } else {
            return redirect(route('admin.dashboard'));
        }
        //return view('admin.dashboard');
    })->name('admin');
    Route::get('shortener/', [LinkShortenerController::class, 'create'])->name('link.create');
    Route::post('shortener/', [LinkShortenerController::class, 'store'])->name('link.store');
    Route::get('shortener/update/{id}', [LinkShortenerController::class, 'update'])->name('link.update');
    Route::post('shortener/update/{id}', [LinkShortenerController::class, 'storeUpdate'])->name('link.update.store');
    Route::post('shortener/delete/{id}', [LinkShortenerController::class, 'delete'])->name('link.delete');
});

Route::get('SiapJadiEskalatorCita/', function () {
    return redirect('https://docs.google.com/spreadsheets/d/1lWDY3TdcxkDY0SCrfjCOZpuROXeYcmYOipe6vn7eFYY/edit#gid=1510192419');
});

Route::get('DatabaseEskalatorCita2022/', function () {
    return redirect('https://docs.google.com/forms/d/e/1FAIpQLSfRumAAzPVoac8rHh0o6R66CMnj9iH851jYhRLwOnaoLMvSMQ/viewform');
});

//Route untuk Peserta
Route::prefix('peserta')->middleware(['ispeserta'])->group(function () {
    Route::get('/', [PesertaController::class, 'index'])->name('peserta.dashboard');
    Route::get('/upload', [PesertaController::class, 'UploadPage'])->name('peserta.upload');
});
// Route::get('/{slug}', [LinkShortenerController::class, 'redirectHandler'])->name('link.redirect');

// Route untuk forda
Route::prefix('forda')->middleware(['isforda'])->group(function () {
    Route::get('/', [FordaController::class, 'index'])->name('forda');
});
