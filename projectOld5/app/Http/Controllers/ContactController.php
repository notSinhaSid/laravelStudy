<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function showContact()
    {
        $students =['ritikesh','Jatin','Sahil','Approv'];

        $contactNumber = "Jaideep";
        return view('contact/contact',['cntNo'=>$contactNumber,'students'=>$students]);
    }
}
