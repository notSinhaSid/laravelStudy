<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BootstrapController extends Controller
{
    //
    function showContent()
    {
        return view('about.about');
    }

    function compileBootstrap()
    {
        return view('about.compilefront');
    }

    function dashboardShow()
    {
        return view('dashboard');
    }
}
