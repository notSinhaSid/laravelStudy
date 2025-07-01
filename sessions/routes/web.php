<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionviewController;

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

Route::get('/view', [SessionviewController::class, 'index'])->name('view');
Route::get('/gview', [SessionviewController::class, 'global_show'])->name('gview');
Route::view('/flash', 'flashdata');
Route::view('/logout', function(){
    if(session()->has('email'))
    {
        session()->flush();
    }
});
