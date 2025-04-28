<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

//basic send of parameter to blade template
Route::get('/home', function(){
    return view('home/home',['name'=>'Stephn curry']);
});

//basic contoller feed blade template

Route::get('/contact', [ContactController::class, 'showContact']);