<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stu_data = DB::table('students')->get();
        return view('home',['data'=>$stu_data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        DB::table('students')->insert([
            'name'=>$request->name,
            'city'=>$request->city,
            'marks'=>$request->marks,
        ]);

        return to_route('index')->with('status','Student Added !!');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = DB::table('students')->find($id);
        return view('editform',['edit_data'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('students')->where('id',$id)->update([
            'name'=>$request->name,
            'city'=>$request->city,
            'marks'=>$request->marks,
        ]);

        return to_route('index')->with('status','Record Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('students')->where('id',$id)->delete();
        return to_route('index')->with('status','Record Deleted !!');
    }
}
