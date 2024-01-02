<?php

use App\Http\Controllers\CustController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth/login');
});
Route::resource('menu', MenuController::class);
Route::resource('cust', CustController::class);
Route::get('/cust', [CustomerController::class, 'login'])->name('cust.login');
Route::get('/pesanan', [PesananController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::post('/pesanan/update/{id}', [PesananController::class, 'update'])->name('pesanan');
Route::post('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user');
Route::get('/menu/destroy/{id}', [MenuController::class, 'destroy'])->name('menu');
Route::get('/riwayat/destroy/{id}', [RiwayatController::class, 'destroy'])->name('riwayat');
Route::get('/pesanan/destroy/{id}', [PesananController::class, 'destroy'])->name('pesanan');
Route::resource('riwayat', RiwayatController::class);
//Route::get('/pesanan/store', [PesananController::class, 'store'])->name('pesanan');
//Route::get('/pesan', [PesananController::class, 'store']);
Route::post('/cust/simpan', [PesananController::class, 'simpan'])->name('pesanan');
Route::post('/cust/store', [PesananController::class, 'store'])->name('pesananAsli');
Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
