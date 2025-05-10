<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showData()
    {
        $students ='';
        // retrive all data from db using query builder methods
        $students = DB::table('student')->get();

        return view('studentDetails',['students'=>$students]);
    }
}
