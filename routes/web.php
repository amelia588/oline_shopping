<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ameliaController;
use App\Http\Controllers\ProductoController;

Route::get('/productos', [ProductoController::class, 'producto']);





Route::get('/paginaprincipal', [ameliaController::class, 'paginaprincipal'])->name('paginaprincipal');
Route::get('/producto', [ameliaController::class, 'producto'])->name('producto');

