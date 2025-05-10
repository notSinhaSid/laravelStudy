<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Closure;
use App\Http\Requests\RegistrationRequest;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function signup(RegistrationRequest $request)
    {
        $request->validated();
        $validate = $request->except('_token');
        return view('form',['data'=>$validate]);
    }
}