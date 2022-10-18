<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ProductoController::class, 'index'])->name('producto.index');
Route::get('/create',[ProductoController::class, 'create'])->name('producto.create');
Route::post('/store',[ProductoController::class, 'store'])->name('producto.store');
Route::get('/edit/{id}',[ProductoController::class, 'edit'])->name('producto.edit');
Route::get('/show/{id}',[ProductoController::class, 'show'])->name('producto.show');
Route::put('/update/{id}',[ProductoController::class, 'update'])->name('producto.update');
Route::delete('/destroy/{id}',[ProductoController::class, 'destroy'])->name('producto.destroy');
