<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pengguna_1',PenggunaController::class);
Route::post('pengguna.store', [PenggunaController::class, 'store'])->name('store');
?>