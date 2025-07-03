<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/post', [PostController::class, 'post'])->name('post');

Route::get('/post/{id}', [PostController::class, 'postwithid'])->name('postwithid');

Route::get('/createpost', [PostController::class, 'createpost'])->name('createpost');

Route::get('/updatepost/{id}', [PostController::class, 'updatepost'])->name('updatepost');

Route::get('/deletepost/{id}', [PostController::class, 'deletepost'])->name('deletepost');

Route::get('/info', [PostController::class, 'getInfo']);    