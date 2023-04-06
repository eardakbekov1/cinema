<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TheaterController;
use App\Http\Controllers\HallController;

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
    return redirect()->route('theaters.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('movies', \App\Http\Controllers\MovieController::class);
Route::resource('theaters', \App\Http\Controllers\TheaterController::class);
Route::resource('halls', \App\Http\Controllers\HallController::class);

Route::get('/movies/info', [App\Http\Controllers\MovieController::class, 'info'])->name('movies.info');
