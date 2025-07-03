<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index()
    {
        // return redirect()->route('about');
        // return redirect()->away('https://www.facebook.com/');
        // return redirect()->action([UserController::class, 'regform']);

        //flash session data
        return redirect('/profile')->with('message','This is your profile page');
    }
}
