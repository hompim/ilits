<?php

use App\Exports\OprecStaffExport;
use App\Http\Controllers\OprecStaffController;
use App\Models\OprecStaff;
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

// Route::get('SiapJadiStaffILITS22/', [OprecStaffController::class, 'create'])->name('oprec.create');
// Route::post('SiapJadiStaffILITS22/', [OprecStaffController::class, 'store'])->name('oprec.store');

// Route::get('SiapJadiStaffILITS22Mac/', function () {
//     return redirect('https://forms.gle/pxnuiKYNPaHUgbcy6');
// });

Route::get('.well-known/pki-validation/{file}', function () {
    return response()->file(public_path("1A277CB0BF7C36D856EC5D2ED19B8C22.txt"));
});

Route::get('/oprec-staff', [OprecStaffController::class, 'index'])->name('oprec_staff');
// Route::get('PengumumanOprecIlits22', [OprecStaffController::class, 'anouncement'])->name('oprec.anouncement');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::get('/oprecstaffexport', [OprecStaffController::class, 'oprecStaffExport'])->name('oprecstaffexport');
Route::post('/oprecstaffimport', [OprecStaffController::class, 'OprecStaffImport'])->name('oprecstaffimport');
// Route::get('/oprec/anouncement', function () {
//     return view('oprec.anouncement');
// })->name('anouncement');

// Route::get('/search', function (Request $nrp) {
//     return OprecStaff::search($nrp->nrp)->get();
// });

Route::get('/search', function () {
    return view('oprec.form-search');
})->name('nrp');

Route::get('/oprec/announcement', [OprecStaffController::class, 'announcement'])->name('announcement');

Route::get('/oprec/search', 'OprecStaffController@announcement');

Route::fallback(function () {
    return redirect(route('coming-soon'));
});
