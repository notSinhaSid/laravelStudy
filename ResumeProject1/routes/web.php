<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\http\Controllers\ContactController;

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
    return view('home');
});

// skills reoute
Route::get('/skill', function()
{
    return view('skills/skill');
})->name('skill');

// services routes
Route::get('/services',[ServiceController::class, 'showService'])->name('services');

//contact routes
Route::get('/contact',[ServiceController::class, 'showContact'])->name('contact');