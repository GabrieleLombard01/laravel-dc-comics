<?php

use App\Http\Controllers\ComicsController;
use App\Http\Controllers\Folder\HomeController;
use App\Http\Controllers\Folder\CharactersController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

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

// Rotta x Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rotta x Characters
Route::get('/characters', [CharactersController::class, 'index'])->name('characters');

// Rotta x Comics
Route::get('/comics', [ComicsController::class, 'index'])->name('comics');

// Rotta x Movies
Route::get('/movies', [MoviesController::class, 'index'])->name('movies');
