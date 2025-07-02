<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $student = cache()->rememberForever('students', function(){
            return Student::all();
        });
        return view('details', ['student'=>$student]);
    }
}
