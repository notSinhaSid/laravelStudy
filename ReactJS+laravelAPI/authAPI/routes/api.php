<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PasswordResetController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

/*
 * public routes
*/
 Route::post('/signup', [UserController::class, 'signup'])->name('signup');

 Route::post('/login', [UserController::class, 'login'])->name('login');

 Route::post('/forgetPassword', [PasswordResetController::class, 'sendPasswordResetEmail'])->name('forgetPassword');

 Route::post('/resetPassword/{token}', [PasswordResetController::class, 'reset'])->name('resetPassword');

 /**
  * protected rotues
  */

Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('/loggeduser', [UserController::class, 'loggedUser'])->name('loggeduser');

    Route::post('/changePassword', [UserController::class, 'changePassword'])->name('changePassword');
});