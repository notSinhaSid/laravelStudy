<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

use Illuminate\Http\Request;

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

Route::get('/student', [StudentController::class, 'index'])->name('student');

Route::get('/profile', function(Request $request){
    // dd($request);
    // dd($request->path());
    // dd($request->url());
    // dd($request->fullUrl());
    // dd($request->method());
});

Route::get('/student/{para}', [StudentController::class, 'newindex'])->name('newindex');

// Route::get('/admin/{para}', [StudentController::class, 'check'])->name('check');
// Route::get('/guest/{para}', [StudentController::class, 'check'])->name('check');

Route::get('/admin/two', [StudentController::class, 'indexnew'])->name('admin.two');
Route::get('/guest/two', [StudentController::class, 'indexnew'])->name('guest.two');