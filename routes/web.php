<?php

use App\Http\Controllers\OprecStaffController;
use Illuminate\Support\Facades\Route;

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
});

Route::get('SiapJadiStaffILITS22/', [OprecStaffController::class, 'create'])->name('oprec.create');
Route::post('SiapJadiStaffILITS22/', [OprecStaffController::class, 'store'])->name('oprec.store');
Route::get('PengumumanOprecIlits22', [OprecStaffController::class, 'anouncement'])->name('oprec.anouncement');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
