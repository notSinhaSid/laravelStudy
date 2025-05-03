<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function showContact()
    {
        return view('contact.contact');
    }
}
