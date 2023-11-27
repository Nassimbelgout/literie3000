<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\MatelasController;

Route::get('/matelas', [MatelasController::class, 'index'])->name('matelas.index');
Route::get('/matelas/create', [MatelasController::class, 'create'])->name('matelas.create');
Route::post('/matelas', [MatelasController::class, 'store'])->name('matelas.store');
Route::get('/matelas/{id}', [MatelasController::class, 'show'])->name('matelas.show');
Route::get('/matelas/{id}/edit', [MatelasController::class, 'edit'])->name('matelas.edit');
Route::put('/matelas/{id}', [MatelasController::class, 'update'])->name('matelas.update');
Route::delete('/matelas/{id}', [MatelasController::class, 'destroy'])->name('matelas.destroy');

