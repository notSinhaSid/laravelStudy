<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    function aboutPage()
    {
        return view('about.aboutus');
    }
}
