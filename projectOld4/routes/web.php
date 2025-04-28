<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ViewReturnController;
use App\Http\Controllers\ControllerBasedParameter;
use App\Http\Controllers\showDetails;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//returing string using controller
Route::get('/about',[AboutController::class, 'show']);

//route returing controller with parameter

Route::get('/about/{name}', [AboutController::class, 'show']);

// controller returing view files
Route::get('/aboutus', [ViewReturnController::class, 'show']);


// returning with paramters
Route::get('/aboutthem/{name}', [ViewReturnController::class, 'withParameter']);

// routes not passing any paramters

Route::get('/aboutthere',[ControllerBasedParameter::class, 'returnSomeValue']);

// single action invokable controller
Route::get('/single', showDetails::class);
