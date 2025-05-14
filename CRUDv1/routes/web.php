<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

//show the form to user
Route::get('/',[StudentController::class,'index'])->name('index');
//take the input from the form
Route::post('/',[StudentController::class,'create'])->name('create');
//fetch the data that is to be edited
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit');
//update the data
Route::put('/edit/{id}',[StudentController::class,'update'])->name('update');
//deleting the record from the database
Route::delete('/delete/{id}',[StudentController::class,'destroy'])->name('destroy');