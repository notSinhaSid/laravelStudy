<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// route to student data display page
Route::get('/display',[StudentController::class,'displayData'])->name('display');