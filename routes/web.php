<?php

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
Route::get('index', [\App\Http\Controllers\TaskController::class, 'index'])->name('user.index');

Route::get('/create', [\App\Http\Controllers\TaskController::class, 'create'])->name('user.create');

Route::post('/store', [\App\Http\Controllers\TaskController::class, 'store'])->name('user.store');

Route::get('{id}/show', [\App\Http\Controllers\TaskController::class, 'show'])->name('user.show');

Route::get('{id}/edit', [\App\Http\Controllers\TaskController::class, 'edit'])->name('user.edit');

Route::patch('{id}/update', [\App\Http\Controllers\TaskController::class, 'update'])->name('user.update');

Route::get('{id}', [\App\Http\Controllers\TaskController::class, 'delete'])->name('user.delete');
//});

