<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



Route::get('/', function () {
    return view('welcome');
});

//route with 
Route::get('/display',[StudentController::class, 'showPage'])->name('display');
// Route::get('cs/students',[StudentController::class, 'showPage'])->name('display');