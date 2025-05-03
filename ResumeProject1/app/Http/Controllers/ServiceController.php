<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function showService()
    {
        return view('services.services');
    }
}
