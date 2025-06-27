<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function showAuthUser(Request $request)
    {
        // return Auth::user();
        // return Auth::id();
        return $request->user()->email;
    }

    public function checkAuth()
    {
        if(Auth::check())
        {
            return 'Your are a SIMP';
        }
        else{
            return 'You are not a SIMP';
        }
    }
}
