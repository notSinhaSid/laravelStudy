<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DeploymentController;

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

Route::get('/add-project', [ProjectController::class, 'add_project'])->name('add-project');

Route::get('/add-language/{id}', [LanguageController::class, 'add_language'])->name('add-language');

Route::get('/add-status/{langId}', [DeploymentController::class, 'add_status'])->name('add-status');

Route::get('/show-deployment/{id}', [DeploymentController::class, 'show_deployment'])->name('show-deployment');