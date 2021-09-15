<?php

use App\Exports\OprecStaffExport;
use App\Http\Controllers\OprecStaffController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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

Route::get('SiapJadiStaffILITS22/', [OprecStaffController::class, 'create'])->name('oprec.create');
Route::post('SiapJadiStaffILITS22/', [OprecStaffController::class, 'store'])->name('oprec.store');

Route::get('SiapJadiStaffILITS22Mac/', function () {
    return redirect('https://forms.gle/pxnuiKYNPaHUgbcy6');
});

Route::get('hasilOprecNih/{date}', function($date){
    return (new OprecStaffExport($date))->download('rekap_oprec_sementara.xlsx');
});


Route::get('/oprec', 'OprecStaffController@index')->name('oprec_staff');
Route::get('/oprec-staff', [OprecStaffController::class, 'index'])->name('oprec_staff');
// Route::get('PengumumanOprecIlits22', [OprecStaffController::class, 'anouncement'])->name('oprec.anouncement');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::get('/oprectaffexport', [OprecStaffController::class, 'oprecStaffExport'])->name('oprecstaffexport');
Route::fallback(function () {
    return redirect(route('coming-soon'));
});
