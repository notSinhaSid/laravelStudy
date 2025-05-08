<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function showForm()
    {
        // print_r('Get method');
        return view('registrationFrom');
    }

    function signup(Request $request)
    {
        /* access all data */
        // print_r($request->all());

        /*for specific data */
        // print_r($request->input());

        // $name = $request->input('name');

        // echo $name;

        // print_r($request->email);

       /*if($request->has(['name','email']))
        {
            print_r($request->email);
            print_r($request->name);
        }*/

        /*if($request->hasAny(['name','email']))
        {
            print_r($request->email);
            print_r($request->name);
        }*/

        /*if($request->filled('name','email','pass'))
        {
            echo "TRUE";
        }
        else
        {
            echo "FALSE";
        }

        if($request->missing('username'))
        {
            echo "Field not present";
        }
*/
        // $request->whenHas('name', function ($input){
        //     print_r('data modified');
        // });

        // $request->whenFilled('name',function($input){
        //     echo "<br>when filled data is available";
        // });
        
        // holding or flashing data in session

        // $request->flash();
        // $request->flashOnly(['name','email']);

        $request->flashExcept('pass');

        // print_r($request->old('name'));
        // print_r($request->old('email'));

        return view('registrationFrom');

        // return redirect('olddata')->withInput();
// for named route
        // return redirect()->route('old')->withInput();

        // return redirect()->route('old')->withInput($request->except('pass'));
    }
}
