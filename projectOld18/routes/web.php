<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ReportController;

use App\Http\Middleware\UnderConstruction;


Route::get('/', function () {
    return view('home');
})->name('home');

//dashboard route
Route::get('/dashboard',[DashboardController::class, 'showdashboard'])->name('dashboard');

//stock route
Route::get('/stocks',[StockController::class,'showStock'])->name('stock')->middleware(UnderConstruction::class);
// no routemiddleware there , can directly use using 'use' method and calling like controller class

//report route
Route::get('/report',[ReportController::class,'showReport'])->name('report');
