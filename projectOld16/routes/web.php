<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

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

// doing named route

Route::get('about',[AboutController::class,'aboutPage'])->name('about');

Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('posts/{category?}',[PostController::class, 'showPost','category',$category])->name('blogspost');