<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Mobile;
class IndexController extends Controller
{
    public function index($id)
    {
        $customer = Customer::find($id);

        // dd($customer->name);
        var_dump($customer->name);
        var_dump($customer->email);

        // access method 
        var_dump($customer->mobile->model);



        $customer = Mobile::find($id)->customer;
        $mobile = Customer::find($id)->mobile;

        dd($mobile);
    }
}
