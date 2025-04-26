<?php

use Illuminate\Support\Facades\Route;

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

// returing view with parameter 
Route::get('/contact/{cNo?}', function($cNo){
    return view('contact/contact',['cNo'=>$cNo]);
});

//routes with multiple parameters with default values

Route::get('contact/confirm/{cnf?}/answer/{ans?}', function($cnf=NULL, $ans=FALSE){
    if($cnf!=NULL && $ans!=FALSE)
    {
        return view('contact/confirm',['cnf'=>$cnf, 'ans'=>$ans]);
        // implementing regex in this  example
    }
})->where('cnf','[a-zA-Z]+');

// for multiple regex apply the => operator and seperate each regex using ,

//using helper method to avoid regex 
Route::get('/manager/{name?}/{Id?}', function($name=NULL, $Id=0000){
    if($name!=NULL && $Id !=0000)
    {
        return view('contact/manager',['name'=>$name,'Id'=>$Id]);
    }
})->whereNumber('Id')->whereAlpha('name');

// implementing the redirect page

Route::view('/login', 'joinus/login');
Route::view('/signup', 'joinus/signup');

Route::redirect('/login', '/signup');

// implementig the default page redirect using FALLBACK

Route::fallback(function(){
    return view('default');
});
