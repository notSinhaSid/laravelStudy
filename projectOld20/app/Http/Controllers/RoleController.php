<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    function show()
    {
        return view('checkAdmin');
    }
}
