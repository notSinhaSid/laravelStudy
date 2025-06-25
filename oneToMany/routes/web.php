<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;

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

Route::get('/add-author', [AuthorController::class, 'add_author'])->name('add-author');

Route::get('/add-post/{id}', [PostController::class, 'add_post'])->name('add-post');

Route::get('/get-post/{id}', [PostController::class, 'get_post'])->name('get-post');

Route::get('/get-author/{id}', [AuthorController::class, 'get_author'])->name('get-author');


Route::get('/index/{id}', [IndexController::class, 'index'])->name('index');
