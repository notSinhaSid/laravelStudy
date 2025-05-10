<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

// controller based route for the database

Route::get('/display',[StudentController::class, 'showData'])->name('display');