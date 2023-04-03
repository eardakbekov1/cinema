<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use \App\Http\Controllers\CinemaController;

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

Route::get('/', function () {
    return redirect()->route('cinemas.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('movies', \App\Http\Controllers\MovieController::class);
Route::resource('theaters', \App\Http\Controllers\TheaterController::class);
//Route::get('/cinemas', [App\Http\Controllers\CinemaController::class, 'index'])->name('cinemas.index');
//Route::get('/cinemas/create', [App\Http\Controllers\CinemaController::class, 'create'])->name('cinemas.create');
//Route::post('/cinemas', [App\Http\Controllers\CinemaController::class, 'store'])->name('cinemas.store');
//Route::get('/cinemas/{cinema}', [App\Http\Controllers\CinemaController::class, 'show'])->name('cinemas.show');
//Route::get('/cinemas/{cinema}/edit', [App\Http\Controllers\CinemaController::class, 'edit'])->name('cinemas.edit');
//Route::put('/cinemas/{cinema}', [App\Http\Controllers\CinemaController::class, 'update'])->name('cinemas.update');
//Route::delete('/cinemas/{cinema}', [App\Http\Controllers\CinemaController::class, 'destroy'])->name('cinemas.destroy');
