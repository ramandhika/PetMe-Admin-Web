<?php

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

Route::get('/', [dashboardController::class, 'hitungJumlahData']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/pet', function () {
    return view('pet');
});
