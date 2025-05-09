<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\UpperCase;

use Illuminate\Support\Facades\Validator;
use Closure;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name'=>['required','string', new UpperCase],
            'email'=>'required|min:15|string|email',
            'password'=>'required|min:8|string|',
        ]);
        /*
            'username'=>['required',
                function(string $attribute, string $value, Closure $fail):void{
                    'if(strtoupper($value)!==$value)
        {
                    // $fail('validate.uppercase')->translate();
                    $fail('The :attribute must be uppercase');
        }
                }
            ]
        */
        // dd($validate); gives an array of the valid data entry in array format
        return view('form',['data'=>$request->except('_token')]);
    }
}
