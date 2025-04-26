<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewReturnController extends Controller
{
    //returing views-basic without any parameter

    function show()
    {
        return view('aboutus/aboutus');
    }

    function withParameter($name)
    {
        return view('aboutus/aboutthem',['name'=>$name]);
    }
}
