<?php

use Illuminate\Support\Facades\Route;
// panggil controller beasiswa
use App\Http\Controllers\BeasiswaController;

Route::get('/', function () {
    return view('welcome');
});

// beasiswa routes

// ke halaman form beasiswa
Route::get('/beasiswa/create', [BeasiswaController::class, 'create'])->name('beasiswa.create');
// action untuk insert data 
Route::post('/beasiswa/store', [BeasiswaController::class, 'store'])->name('beasiswa.store');
// ke halaman data 
Route::get('/beasiswa/data', [BeasiswaController::class, 'index'])->name('beasiswa.index');



Route::get('/data', function () {
    return view('data');
})->name("data");