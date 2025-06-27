<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//custome routes for testing AUTH facades form laravel
Route::get('/show-user', [ShowController::class, 'showAuthUser'])->name('show-user');
Route::get('/check-user', [ShowController::class, 'checkAuth'])->name('check-user');

Route::get('/report', function (){
    return view('reports');
})->middleware('auth');

Route::get('change', function(){
    return view('change');
})->name('change');

require __DIR__.'/auth.php';
