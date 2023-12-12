<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\RiwayatController;
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
    return view('template/master');
});
Route::resource('menu', MenuController::class);
Route::get('/pesanan' , [PesananController::class, 'index']);
Route::post('/pesanan/update/{id}', [PesananController::class, 'update'])->name('pesanan');
Route::resource('riwayat', RiwayatController::class);
