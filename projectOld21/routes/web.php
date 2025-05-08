<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

// route for fomr
Route::get('/regform',[RegisterController::class,'showForm'])->name('regform');
// post
Route::POST('/regform',[RegisterController::class,'signup'])->name('signup');

Route::view('/olddata','olddata')->name('old');