<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    function showStock()
    {
        return view('stock');
    }
}
