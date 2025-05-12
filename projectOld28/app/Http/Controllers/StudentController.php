<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showPage()
    {
        $students = DB::table('student')->paginate(4);
        // $students = DB::table('student')->simplePaginate(4);
        // $students->withPath('/cs/students');
        // dd($students->count());
        return view('studentpage',['students'=>$students]);
    }
}
