<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showDetails extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //only one action will be performed using invokable controller
        return view('invokablecontroller');
    }
}
