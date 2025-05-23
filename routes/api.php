<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// import controller
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/profile', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// auth
Route::post ('login', [AuthController::class, 'login']);
Route::post ('register', [AuthController::class, 'register']);
Route::post ('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get ('pemasukan', [PemasukanController::class, 'indexApi'])->middleware('auth:sanctum');
Route::get ('pengeluaran', [PengeluaranController::class, 'indexApi'])->middleware('auth:sanctum');
