<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBasedParameter extends Controller
{
    //
    function returnSomeValue()
    {
        $value="Sachin Dedha";
        return view('aboutus/aboutthere',['value'=>$value]);
    }
}
