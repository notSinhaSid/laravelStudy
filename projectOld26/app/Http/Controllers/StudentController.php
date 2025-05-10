<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function displayData()
    {
        $stuName = 'Chirag';
        $stuEmail = 'chintu@gmail.com';
        $stuCity = 'Noida';
        // simple query
        // $students = DB::select('SELECT * FROM student');

        // query with where clauss
        // $students = DB::select('SELECT * FROM student WHERE stuCity=?',['delhi']);

        //name binding
        // $students = DB::select('SELECT * FROM student WHERE stuCity = :stuCity',['stuCity'=>'phase 2']);

        /* insert method in sql query 
        |
        | ========= inseting data in table 
        */

        /*DB::insert('INSERT INTO student(stuName, stuEmail, stuCity)VALUES(:stuName, :stuEmail, :stuCity)
        ',['stuName'=>$stuName,'stuEmail'=>$stuEmail,'stuCity'=>$stuCity]); */


        // below is the updae code
        // DB::update('UPDATE student SET stuCity = :stuCity WHERE stuId = :stuId',['stuCity'=>'Dallupura', 'stuId'=>6]);
       

        // finally is the delete code
        // DB::delete('DELETE FROM student WHERE stuId = :stuId',['stuId'=>5]);

        // DB::unprepared('DELETE FROM student WHERE stuId = 2');

        // transaction
        // multiple quey using transaction function of DB class
        /*DB::transaction(function(){
            DB::update('UPDATE student SET stuName = :stuName WHERE stuId =:stuId',['stuName'=>'Amrisha','stuId'=>4]);
            DB::delete('DELETE FROM student WHERE stuId = ?',[1]);
        });*/

        $students = DB::select('SELECT * FROM student');

        return view('studenttable',['data'=>$students]);
    }
}
