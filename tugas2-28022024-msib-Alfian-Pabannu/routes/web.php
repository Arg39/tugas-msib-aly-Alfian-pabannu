<?php

use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\PanitiaController;
use App\Http\Controllers\SMAController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SMAController::class, 'index']);
Route::get('/pendaftaran', [SMAController::class, 'pendaftaran']);
Route::get('/about', [SMAController::class, 'about']);
Route::get('/login', [PanitiaController::class, 'showLoginForm'])->name('login');
Route::post('/login', [PanitiaController::class, 'login'])->name('login.submit');
Route::post('/logout', [PanitiaController::class, 'logout'])->name('logout');


Route::get('/dashboard', [DataSiswaController::class, 'index']);
Route::post('/add-data-siswa', [DataSiswaController::class, 'create']);
Route::get('/decision', [DataSiswaController::class, 'showahp']);
Route::get('/rank', [DataSiswaController::class, 'showrank']);
Route::get('/pendaftar', [DataSiswaController::class, 'showpendaftar']);
