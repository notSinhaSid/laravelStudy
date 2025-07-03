<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index()
    {
        // return response('Hello', 200)->header('Content-Type', 'text/plain');
        // return response('Hello', 200)->cookie('res', 'text/plain');
        // return response('Hello', 200)->withoutCookie('res');
        // return view('responseview');
        // return response()->view('responseview');
        // return response()->view('responseview')->header('Content-Type', 'text/html');
        return response()->json([
            'name'=>'Devesh Dixit',
            'city'=>'Jaipur'
        ]);
    }
}
