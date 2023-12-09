<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
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
Route::middleware(['guest'])->group(function () {
    Route::get('/', [authController::class, 'index']);
    Route::post('/', [authController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [dashboardController::class, 'hitungJumlahData']);
});



Route::get('/logout', [authController::class, 'logout']);


Route::get('/user', function () {
    return view('user');
});

Route::get('/pet', function () {
    return view('pet');
});
