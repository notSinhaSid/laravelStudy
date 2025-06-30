<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/', function (){
//     return view('home');
// });

Route::get('/dashboard', [DashboardController::class, 'showPost'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // custome route for the form section all grouped with auth 
    Route::get('/create-post', [PostController::class, 'index'])->name('post-index');

    Route::post('/create-post', [PostController::class, 'create'])->name('create-post');
    
    Route::get('/edit-post/{id}', [PostController::class, 'edit'])->middleware('can:isAdmin, App\Models\Post')->name('edit-post');
    
    Route::put('/edit-post/{id}', [PostController::class, 'update'])->middleware('can:isAdmin, App\Models\Post')->name('update-post');
    
    Route::delete('/delete-post/{id}', [PostController::class, 'destroy'])->middleware('can:isAdmin, App\Models\Post')->name('delete-post');
});





require __DIR__.'/auth.php';
