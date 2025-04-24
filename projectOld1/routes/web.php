<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// this is route which return 
Route::get('/about', function(){
    return "Hello. this is older version of laravel , precisely version 8.83.29!!";
});

// Route with a parameter in the url/uri

Route::get('/products/{pId}', function($pId){
    return "There is a parameter passed through the URL which is ". $pId;
});

//Route with multiple parameter passed through the url/uri

Route::get('/products/{pId}/laptop/{lId}', function($pId, $lId){
    return "The product Id is ".$pId." and there requested laptop is :".$lId;
});

//default parameter in the parameter list

Route::get('/products/{pId?}', function($pId = NULL){
    return "The default product selected is with id :". $pId;
});

// regular expression in the routes parameters

Route::get('/auth/{email?}', function ($email=NULL){
    return "The auth verified email is : ". $email;
})->where('email','[a-zA-Z0-9]+');

// to skip the regular expression , laravel provides helper methods to solve these issues

Route::get('/roll/{roll?}/{name?}', function($roll=NULL, $name=NULL){
    if($roll==NULL && $name==NULL)
    {
        return "Currently no sutdent is present.";
    }
    else
    {
        echo $name." is the current student with id : ".$roll;
    }
})->whereNumber('roll')->whereAlpha('name');

// redirecting routes from current location to another location 
// Route::redirect('/here', '/there)

Route::redirect('/redirect','https://www.google.com');