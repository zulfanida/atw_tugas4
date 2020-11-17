<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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
    return view('welcome');
});
Route::get('/user', function () {
    return view('template.user');
 });
Route::get('/admin', function () {
    return view('template.admin');
});
Route::get('/beranda2', function () {
    return view('beranda2');
});
Route::get('/produk2', function () {
    return view('produk2');
});
Route::get('/kategori2', function () {
    return view('kategori2');
});
Route::get('/login2', function () {
    return view('login2');
});

Route::get('/beranda', [HomeController::class, 'showBeranda']);
Route::get('/kategori', [HomeController::class, 'showKategori']);

Route::get('test/{produk}/{hargaMin?}/{hargaMax?}', [HomeController::class, 'test']);

Route::prefix('admin')->middleware('auth')->group(function(){
	Route::resource('produk', ProdukController::class);
	Route::resource('kategori', KategoriController::class);
	Route::resource('user', UserController::class);
});

Route::get('/login', [AuthController::class, 'showLogin'])->('login');
Route::post('/login', [AuthController::class, 'loginProcess']);
Route::get('/logout', [AuthController::class, 'logout']);
