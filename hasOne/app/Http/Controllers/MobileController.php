<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use App\Models\Customer;

class MobileController extends Controller
{
    public function show_customer($id)
    {
        $customer = Mobile::find($id)->customer;
        // return $customer;
        return view('customer', ['customer' => $customer]);
    }
}
