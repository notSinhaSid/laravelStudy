<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        // dd($request);
        // dd($request->path());
        // dd($request->url());
        // dd($request->fullUrl());
        // dd($request->method());
       /* if($request->isMethod('GET'))
        {
            dd('GET is called');
        }
        else{
            dd('POST is called');
        }   */

        // dd($request->header('cookie'));

        /*if($request->hasHeader('X-Header-Name'))
        {
            dd('Header present');
        }
        else{
            dd('Header not present');
        }*/

        // dd($request->bearerToken());
        // dd($request->ip());
        // dd($request->getAcceptableContentTypes());

        /*if($request->accepts(['text/html','application/json']))
        {
            dd('accepted');
        }
        else{
            dd('not accepted');
        }*/
        // dd($request->query());
        // dd($request->query('name', 'person'));



        return view('studentnview');
    }

    public function newindex(Request $request, string $id)
    {
        dd($id);
        return view('studentview');
    }

    public function check(Request $request, string $id)
    {
        if($request->is('admin/*')){
        dd('you are correct');}
        else{
        dd('not correct response');}
        // return view('studentview');
    }

    public function indexnew(Request $request)
    {
        if($request->is('admin.*')){
        dd('admin section');}
        else{
        dd('guest section');}
        return view('studentview');
    }
    

}
