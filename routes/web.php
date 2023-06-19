<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeluarController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\SppController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/',[LandingPageController::class,'index']);
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::resource('/kasKeluar',KeluarController::class);
Route::resource('/spp',SppController::class);
Route::get('/cetakKeluarForm',[KeluarController::class,'keluarForm'])->name('cetakKeluarForm');
Route::get('/cetakMasukForm',[MasukController::class,'masukForm'])->name('cetakMasukForm');
Route::get('/cetakKeluarPertanggal/{tglawal}/{tglakhir}',[KeluarController::class,'cetakKeluar'])->name('cetakKeluarPertanggal');
Route::get('/cetakMasukPertanggal/{tglawal}/{tglakhir}',[MasukController::class,'cetakMasuk'])->name('cetakMasukPertanggal');
Route::resource('/kasMasuk',MasukController::class);
Route::resource('/santri',SantriController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
