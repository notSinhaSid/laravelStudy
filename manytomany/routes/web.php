<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SingerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-song', [SongController::class, 'add_song'])->name('add-song');

Route::get('/add-singer', [SingerController::class, 'songPerformed'])->name('add-singer');

Route::get('/get-song/{id}', [SongController::class, 'get_song'])->name('get-song');

Route::get('/get-singer/{id}', [SingerController::class, 'get_singer'])->name('get-singer');
