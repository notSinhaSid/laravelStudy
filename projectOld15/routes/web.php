<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BootstrapController;
use App\Http\Controllers\CompanyController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/about',[BootstrapController::class, 'showContent']);

Route::get('/compile',[BootstrapController::class, 'compileBootstrap']);

Route::get('/abtcomp',[CompanyController::class, 'companyDetails']);

Route::get('/dashboard', [BootstrapController::class, 'dashboardShow']);