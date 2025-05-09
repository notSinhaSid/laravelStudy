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
        //single rule validation
        /*$validate = $request->validate([
            'name'=>'required',
            'password'=>'required',
        ]);
        */
        //multiple rule validation
        /*$validate = $request->validate([
            'email'=>['required','min:15'],
            'password'=>['required'],
        ]); */

        //multiple rule with shorthand type
        $validate = $request->validate([
            'email'=>'required|min:15|string',
            'password'=>'required|min:8|string|',
        ]);

        
        return view('form',['data'=>$request->except('_token')]);
    }
}
