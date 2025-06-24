<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Students::all();
        return view('home', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $students = new Students;
        $students->name = $request->name;
        $students->city = $request->city;
        $students->marks = $request->marks;
        
        $students->save();

        return  to_route('index')->with('message', 'Student Added Successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $students = Students::find($id);
        return view('editform', ['students' => $students]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $students = Students::find($id);
        $students->name = $request->name;
        $students->city = $request->city;
        $students->marks = $request->marks;
        
        $students->save();

        return  to_route('index')->with('message', 'Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Students::destroy($id);
        return to_route('index')->with('message', 'Student Deleted Successfully');
    }
}
