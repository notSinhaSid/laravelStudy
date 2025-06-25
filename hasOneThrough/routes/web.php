<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-mechanic',[MechanicController::class, 'add_mechanic'])->name('add-mechanic');

Route::get('/create-car/{id}', [CarController::class, 'create_car'])->name('create-car');

Route::get('/add-owner/{id}', [OwnerController::class, 'add_owner'])->name('create-car');

Route::get('get-owner/{id}', [OwnerController::class, 'get_owner'])->name('get-owner');