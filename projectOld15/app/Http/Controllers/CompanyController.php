<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function companyDetails()
    {
        return view('about/aboutcompany');
    }
}
