<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', function () {
    return view('test');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

Route::resource('kategori', KategoriController::class);

Route::resource('pemasukan', PemasukanController::class);

Route::resource('pengeluaram', PengeluaranController::class);

});

// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');