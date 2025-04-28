<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function showProduct()
    {
        $title = "laravel tuts";
        $user ='Admin';
        $userType = $user == 'User' ? TRUE :FALSE;
        $itemList = ['wok','spatula','rolling pin','cups'];
        return view('Products/product',['title'=>$title,'userType'=>$userType,'itmeList'=>$itemList]);
    }
}
