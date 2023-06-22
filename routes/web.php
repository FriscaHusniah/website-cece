<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\InputController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/input', [InputController::class, 'index'])->name('input');
