<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function add_student_data()
    {
        $student = new Student();
        $student->name ="Arun Sharma";
        $student->city = "Mayur Vihar III";

        $student->save();
    }

    public function show_student()
    {
        return Student::all();
    }
}
