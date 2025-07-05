<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
/**
 * 
 * THIS IS PUBLIC API CREATION WHERE THERE IS NO SECURITY
 * 
 */
/*all student data api
Route::get('/students', [StudentController::class, 'index'])->name('student_index');
//student data based on given id
Route::get('/students/{id}', [StudentController::class, 'show'])->name('student_show');
//add new student
Route::post('/students', [StudentController::class, 'store'])->name('student_store');
//update student based on id
Route::put('/students/{id}', [StudentController::class, 'update'])->name('student_update');
//delete the student based on id
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('student_delete');
//search based on city or anyother parameter
Route::get('/students/search/{search}', [StudentController::class, 'search'])->name('student_search');
*/

Route::post('/signup', [UserController::class, 'signup'])->name('user_signup');

Route::post('/login', [UserController::class, 'login'])->name('user_login');



/**
 * 
 * THIS IS NOW API WITH AUTHENTICATION 
 * 
 */

 /*Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/students', [StudentController::class, 'index'])->name('student_index');
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('student_show');
    Route::post('/students', [StudentController::class, 'store'])->name('student_store');
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('student_update');
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('student_delete');
    Route::get('/students/search/{search}', [StudentController::class, 'search'])->name('student_search');


    //logout
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
 });
*/

 //partially protected

 //public
Route::post('/signup', [UserController::class, 'signup'])->name('user_signup');
Route::post('/login', [UserController::class, 'login'])->name('user_login');
Route::get('/students', [StudentController::class, 'index'])->name('student_index');
Route::get('/students/{id}', [StudentController::class, 'show'])->name('student_show');
Route::get('/students/search/{search}', [StudentController::class, 'search'])->name('student_search');


// private

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/students', [StudentController::class, 'store'])->name('student_store');
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('student_update');
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('student_delete');
    //logout
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
 });


 /*
|single routing for the common route  
*/

Route::resource('students', StudentController::class);