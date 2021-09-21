<?php

use App\Exports\OprecStaffExport;
use App\Http\Controllers\OprecStaffController;
use App\Http\Controllers\LinkShortenerController;
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


Route::get('/oprec-staff', [OprecStaffController::class, 'index'])->name('oprec_staff');

Route::get('/oprecstaffexport', [OprecStaffController::class, 'oprecStaffExport'])->name('oprecstaffexport');
Route::post('/oprecstaffimport', [OprecStaffController::class, 'OprecStaffImport'])->name('oprecstaffimport');
Route::post('/oprecmacimport', [OprecStaffController::class, 'OprecMacImport'])->name('oprecmacimport');


Route::get('SiapJadiEskalatorCita/', function () {
    return redirect('https://docs.google.com/spreadsheets/d/1lWDY3TdcxkDY0SCrfjCOZpuROXeYcmYOipe6vn7eFYY/edit#gid=1510192419');
});

Route::get('DatabaseEskalatorCita2022/', function () {
    return redirect('https://docs.google.com/forms/d/e/1FAIpQLSfRumAAzPVoac8rHh0o6R66CMnj9iH851jYhRLwOnaoLMvSMQ/viewform');
});

Route::get('admin/', function(){
    return view('layouts.admin');
});

Route::get('AkuEskalatorCita/', [OprecStaffController::class, 'search'])->name('oprec.search');
Route::post('AkuEskalatorCita/', [OprecStaffController::class, 'announcement'])->name('oprec.announcement');

Route::get('shortener/',[LinkShortenerController::class, 'create'])->name('link.create');
Route::post('shortener/',[LinkShortenerController::class, 'store'])->name('link.store');

Route::get('/{slug}',[LinkShortenerController::class, 'redirectHandler'])->name('link.redirect');

/**Route::fallback(function () {
    return redirect(route('coming-soon'));
});**/
