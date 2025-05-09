<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function showForm()
    {
        return view('form');
    }

    function signup(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required|string',
            'email'=>'required|min:15|string',
            'password'=>'required|min:8|string|',
        ]);

        
        return view('form',['data'=>$request->except('_token')]);
    }
}
