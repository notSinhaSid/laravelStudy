<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    function showReport()
    {
        return view('report');
    }
}
