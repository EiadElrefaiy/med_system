<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'root'])->name('root');
//Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

  Route::get('index', [App\Http\Controllers\CRUD\ReadController::class, 'index'])->name('table.index');

  Route::get('add', [App\Http\Controllers\CRUD\CreateController::class, 'add'])->name('add');

  Route::post('create', [App\Http\Controllers\CRUD\CreateController::class, 'create'])->name('create');

  Route::get('edit', [App\Http\Controllers\CRUD\UpdateController::class, 'edit'])->name('edit');

  Route::post('update', [App\Http\Controllers\CRUD\UpdateController::class, 'update'])->name('update');

  Route::post('delete', [App\Http\Controllers\CRUD\DeleteController::class, 'delete'])->name('delete');
