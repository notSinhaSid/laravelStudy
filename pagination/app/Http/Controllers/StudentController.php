<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function add_student()
    {
        $student = new Student();
        $student->name ='Amrisha';
        $student->email = 'amrisha@gmail.com';
        $student->marks = 92;

        $student->save();
    }

    public function show_student()
    {
        // $student = Student::paginate(5);
        $student = Student::simplePaginate(5);
        return view('show', ['student'=>$student]);
    }
}
