<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ReportController;


Route::get('/', function () {
    return view('home');
})->name('home');

//dashboard route
Route::get('/dashboard',[DashboardController::class, 'showdashboard'])->name('dashboard');

//stock route
Route::get('/stocks',[StockController::class,'showStock'])->name('stock');

//report route
Route::get('/report',[ReportController::class,'showReport'])->name('report');
