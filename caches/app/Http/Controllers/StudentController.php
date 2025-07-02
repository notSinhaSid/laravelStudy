<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class StudentController extends Controller
{
    public function index()
    {
        /* using cache facades */
        // 1. storing data in cache
        // Cache::put('email', 'admin@admin.com', $seconds =120);

        //2. without any time limit
        // Cache::put('email_new', 'jatin@gmail.com');

        //3. using date time format
        // Cache::put('state', 'Noida', now()->addMinutes(2));
        // dd(Cache::get('state'));

        //4. closure function 
        // Cache::remember('state', 2, function(){
        //     return 'New Yorks';
        // });
        // dd(Cache::get('state'));

        // dd(Cache::add('roll', 110, 1));

        //5. forever 
        // Cache::forever('product', 'Laptop');
        // dd(Cache::get('product'));


        /*retriving the data */
        // $prodname = Cache::get('product');

        // //closure function
        // $cart = Cache::get('cart', function(){
        //     return 10;
        // });

        // //default value
        // $prod = Cache::get('quantity' ,20);
        // return view('basic', ['product'=>$prodname, 'qty'=>$prod, 'cart'=>$cart]);

        /*check if item exists */
        // if(Cache::has('product')){
        //     dd('yes');
        // }else{
        //     dd('no');
        // }



        /**remove  */
        // Cache::forget('product');
        // Cache::put('product', 'Laptop', 0);
        // Cache::put('product', 'Laptop', -1);

        /**clear cache */
        // Cache::flush();

        //retrive and store item
        // $shirtPrice = Cache::rememberForever('shirt', function()
        // {
        //     return 999;
        // });
        // dd($shirtPrice);

        /*retirve and delete item */
        // $shirtPrice = Cache::pull('shirt');


        /*********** GLOBAL  *******************/

        //store
        // cache(['email'=>'myemail@gmail.com'], 10);
        // cache(['roll'=>56], 10);
        // cache(['marks'=>46], now()->addMiniutes(1));
        cache::remember('phone',2, function()
        {
            return 9899644582;
        });

        dd(cache::add('roll', 89, 2));

        cache()->forever('product', 'console');

        /**retrive */
        $prodname = cache('product');

        //closure function
        $cart = cache('cart', function(){
            return 10;
        });

        /**exists or not */
        if(cache()->has('product')){
            dd('yes');
        }else{
            dd('no');
        }

        /**remove */
        cache()->forget('product');
        cache()->put('product', 'Laptop', 0);
        cache()->put('product', 'Laptop', -1);

        /**retriev and store */
        $shirtPrice = cache()->rememberForever('shirt', function()
        {
            return 999;
        });

        /**  retrive and delete **/
        $shirtPrice = cache()->pull('shirt');

        dd(cache('product'));
    }
}
