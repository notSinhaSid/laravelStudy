<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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

// Route::get('/', function () {
//     return view('home');
// });


//show form
Route::get('/', [StudentsController::class, 'index'])->name('index');
//sedn form data
Route::post('/', [StudentsController::class, 'create'])->name('create');
// show edit form
Route::get('/edit/{id}', [StudentsController::class, 'edit'])->name('edit');
// send edit form for update
Route::put('/edit/{id}', [StudentsController::class, 'update'])->name('update');
//route for delete
Route::get('/delete/{id}', [StudentsController::class, 'destroy'])->name('destroy');