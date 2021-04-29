<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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
    return view('index');
});

Auth::routes();

//movies
Route::get('/movies', [MovieController::class, 'index'])->name('movies');
Route::post('/movies/add_movie', [MovieController::class, 'store'])->name('movies');
Route::get('/movies/add_movie', [MovieController::class, 'add_movie_form'])->name('add_movie');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
