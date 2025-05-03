<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

// skills reoute
Route::get('/skill', function()
{
    return view('skills/skill');
})->name('skill');

// services routes
Route::get('/services',[ServiceController::class, 'showService'])->name('services');

//contact routes
Route::get('/contact',[ContactController::class, 'showContact'])->name('contact');