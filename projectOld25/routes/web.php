<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

// adding route 
Route::get('/regform',[FormController::class,'showForm'])->name('regform');
// handling form data
Route::post('/regform',[FormController::class,'signup'])->name('signup');