<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;


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
Route::get('/home', function () {
    return view('/home', ["title"=>"Home"]);
});

Route::get('/register', [AuthController::class, "register"])->name('register');
Route::get('/login', [AuthController::class, "login"])->name('login');
Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::post('/register', [AuthController::class, "doRegister"])->name('do.register');
Route::post('/login', [AuthController::class, "doLogin"])->name('do.login');

//tampil data kategori
Route::get('/kategoris/index', [KategoriController::class,'index']);
Route::get('/kategoris/add', [KategoriController::class,'create']);
Route::get('/kategoris/index/{id}/edit', [KategoriController::class, 'edit']);
Route::get('/kategoris/index/{id}/delete', [KategoriController::class, 'destroy']);
Route::post('/kategoris/index', [KategoriController::class, 'store']);
Route::put('/kategoris/index/{id}',[KategoriController::class, 'update']);

//tampil data produk
Route::get('/product/index', [ProdukController::class, 'index']);
Route::get('/product/add', [ProdukController::class,'create']);
Route::get('/product/index/{id}/edit', [ProdukController::class, 'edit']);
Route::get('/product/index/{id}/delete', [ProdukController::class, 'destroy']);

Route::post('/product/index', [ProdukController::class, 'store']);

Route::put('/product/index/{id}',[ProdukController::class, 'update']);

Route::fallback(function () {
    return '404 | Halaman  tidak tersedia';
});


