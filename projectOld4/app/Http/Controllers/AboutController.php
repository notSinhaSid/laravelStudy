<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function show($name)
    {
        return "This is about controller !!". $name;
    }
}
