<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Especialidades

Route::get('/specialties', [App\Http\Controllers\SpecialtyController::class, 'index'])->name('specialties.index');
Route::get('/specialties/create', [App\Http\Controllers\SpecialtyController::class, 'create'])->name('specialties.create');
Route::post('/specialties', [App\Http\Controllers\SpecialtyController::class, 'store'])->name('specialties.store');
Route::get('/specialties/{specialty}/edit', [App\Http\Controllers\SpecialtyController::class, 'edit'])->name('specialties.edit');
Route::put('/specialties/{specialty}', [App\Http\Controllers\SpecialtyController::class, 'update'])->name('specialties.update');
Route::delete('/specialties/{specialty}', [App\Http\Controllers\SpecialtyController::class, 'destroy'])->name('specialties.destroy');