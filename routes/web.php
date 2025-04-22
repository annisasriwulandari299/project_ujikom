<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\AnggaranController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', function () {
    return redirect()->route('dashboard');
})->name('home');

Route::get('/test', function () {
    return view('test');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard-user', [DashboardController::class, 'index'])->name('user.dashboard');
    Route::resource('kategori', KategoriController::class);
    Route::resource('pemasukan', PemasukanController::class);
    Route::resource('pengeluaran', PengeluaranController::class);
    Route::resource('anggaran', AnggaranController::class);

    Route::get('/laporan/anggaran', [LaporanController::class, 'index'])->name('laporan.anggaran');
    Route::get('/laporan/anggaran/pdf', [LaporanController::class, 'generatePDF'])->name('laporan.anggaran-pdf');
    Route::get('/laporan/pemasukan', [LaporanController::class, 'pemasukan'])->name('laporan.pemasukan');
    Route::get('/laporan/pemasukan/pdf', [LaporanController::class, 'pemasukanPDF'])->name('laporan.pemasukan-pdf');
    Route::get('/laporan/pengeluaran', [LaporanController::class, 'pengeluaran'])->name('laporan.pengeluaran');
    Route::get('/laporan/pengeluaran/pdf', [LaporanController::class, 'pengeluaranPDF'])->name('laporan.pengeluaran-pdf');
    Route::get('/laporan/margin', [LaporanController::class, 'margin'])->name('laporan.margin');
    Route::get('/laporan/margin/pdf', [LaporanController::class, 'marginPDF'])->name('laporan.margin-pdf');
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth', isAdmin::class]], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/user', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('/user', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('/user/{user}', [UserController::class, 'show'])->name('admin.user.show');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::put('/user/{user}', [UserController::class, 'update'])->name('admin.user.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');
});
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
