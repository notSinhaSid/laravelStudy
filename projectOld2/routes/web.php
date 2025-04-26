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

//route to about page
Route::get('/about', function(){
    return view('about');
});

//using ::view only when is to be returned

Route::view('/contact','contact');

// this for view under anothe folder within the view folder

// Route::view('/products/productList', 'products/products');
Route::get('/products/productList', function(){
    return view('products/products');
    // can work as return view('products.products);
});

//sending parameter with the url to the view page in the blade template

// Route::get('/customer', function(){
//     return view('customer/details', ['Id'=>12]);
// });

//passing data without using array
//biggest downside of this method is that only one data can be passed 
Route::get('/customer', function(){
    return view('customer/details')->with('Id',45);
});