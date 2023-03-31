<?php

use App\Http\Controllers\SantriController;
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

Route::get('/', function () {
    return view('layouts.main');
});
Route::get('/home', function () {
    return view('layouts.main');
});
Route::get('/dtsantri', function () {
    return view('content.data');
});
Route::get('/content/add', function () {
    return view('content.formadd');
});