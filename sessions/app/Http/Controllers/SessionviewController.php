<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionviewController extends Controller
{
    public function index(Request $request)
    {
        //request instance

        // 1. request instance
        $request->session()->put('name', 'Raajat');

        // 2. retrive data
        $name = $request->session()->get('name');

        // 3. if key is not there or declared 
        $roll = $request->session()->get('roll');

        //4. if default value of the key that is not present
        $city = $request->session()->get('city', 'Delhi');
        $request->session()->put('city', 'Noida');

        // 4. closure function
        $marks = $request->session()->get('marks', function(){
            return 49;
        });


        // check if item exists in the session
        // if($request->session()->has('name'))
        // {
        //     dd('yes');
        // };

        // // check if item present i nession v2
        // if($request->session()->exists('name'))
        // {
        //     dd('present');
        // }
        // else{
        //     dd('not present');
        // }

        // // if item is not present
        // if($request->session()->missing('name'))
        // {
        //     dd('is not shown');
        // }
        // else{
        //     dd('is shown');
        // }
        $request->session()->flash('status', 'Anime watched');
        return redirect('flashdata');

        // /* delete single item from the session  */
        // echo ($request->session()->get('name'));
        // $request->session()->forget('name');
        // echo ($request->session()->get('name'));

        // /* delete multiple */
        // $request->session()->flush();

        // /** retrieving and deleting data */
        // $value_before_pull = $request->session()->pull('name','Sahil');
        // dd($value_before_pull);


        // //get all data stored in the session
        // $data_stored = $request->session()->all();

        // dd($data_stored);

        // // in case of no key is present, nothing is displayed
        // return view('sessionview', ['name'=>$name, 'roll'=>$roll, 'city'=>$city]);
    }

    public function global_show()
    {
        /* Global session helper */
        //storing data
        session(['name'=>'Subham Chawala']);
        session(['city'=>'Noida sector 15A']);
        
        $name = session('name');
        $roll = session('roll');
        //default value
        $city = session('city', 'noida');

        /** what ever we did in the request instace method , but in global jus remove the $request  */
        // check if item exists in the session
        // if(session()->has('name'))
        // {
        //     dd('yes');
        // };

        // // check if item present i nession v2
        // if(session()->exists('name'))
        // {
        //     dd('present');
        // }
        // else{
        //     dd('not present');
        // }

        // // if item is not present
        // if(session()->missing('name'))
        // {
        //     dd('is not shown');
        // }
        // else{
        //     dd('is shown');
        // }


        /* delete single item from the session  */
        echo (session()->get('name'));
        session()->forget('name');
        echo (session()->get('name'));

        /* delete multiple */
        session()->flush();

        /** retrieving and deleting data */
        $value_before_pull = session()->pull('name','Sahil');
        dd($value_before_pull);
        return view('sessionview', ['name'=>$name,'roll'=>$roll, 'city'=> $city]);
    }

//     public function flashfunction(Request $request)
//     {
        
//     }
}
