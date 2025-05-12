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
        // $students = DB::table('student')->get();

        // retriving single row/column from the table
        // $students = DB::table('student')->first();

        // where clause
        $students = DB::table('student')->where('city','delhi')->first();

        //value method for one column value not the entire row
        $students = DB::table('student')->where('city','new delhi')->value('pass_date');

        //find mehtod based on ID search
        $students = DB::table('student')->find(5);

        //pluck method for retrieving a list of column values
        $students = DB::table('student')->pluck('name');

        $students = DB::table('student')->pluck('name','marks');
        // in this mehod the later value is the key of the assoc array and the first value is th value of the K:V pair

        //chunking the records
        /*DB::table('student')->orderBy('id')->chunk('3', function($students){
            echo "++++++++++<br>";
            foreach ($students as $stu) {
                echo $stu->name;
                echo '<br>';
            }
            return FALSE;
        });*/

        // Aggregates

        $students = DB::table('student')->count();
        $students = DB::table('student')->max('marks');
        $students = DB::table('student')->min('marks');

        //determining if the records exists or not
        /*if(DB::table('student')->where('id','11')->exists())
        {
            dd('YES');
        }
        if(DB::table('student')->where('id','11')->doesntExist())
        {
            dd('YES');
        }
        */

        //select method for particular column based
        // $students = DB::table('student')->select('name','city')->get();

        // $students = DB::table('student')->distinct()->get('city');

        // //where method / Calus
        // $students = DB::table('student')->where('id', '>', 4)->get('pass_date');
        // $students = DB::table('student')->where('name', 'like', 'S%')->get('pass_date');

        // //orWhere
        // $students = DB::table('student')->where('id',2)->orWhere('name','like','S%')->get('name');

        // //whereBetween
        // $students = DB::table('student')->whereBetween('marks',[40,70])->get();

        // //date
        // $students = DB::table('student')->whereDate('pass_date','>','2024-05-14')->get();
        // //where month
        // $students = DB::table('student')->whereMonth('pass_date','>','05')->get('pass_date');

        // //day
        // $students = DB::table('student')->whereDay('pass_date','>','30')->get('pass_date');

        // //year
        // $students = DB::table('student')->whereYear('pass_date','>','2017')->get('email');

        // //orderBy
        // $students = DB::table('student')->orderBy('marks','DESC')->get('marks');

        // //latest and oldest entry
        // $students = DB::table('student')->latest('pass_date')->first('name');
        // $students = DB::table('student')->oldest('pass_date')->first('name');


        // //randonOrder
        // $students = DB::table('student')->inRandomOrder()->first('id');

        // //groupBy and having
        // // $students = DB::table('student')->groupBy('pass_date')->having('marks','>','50')->get();


        // //take and skip
        // $students = DB::table('student')->take('3')->get('name');
        // //skip - take works together
        // $students = DB::table('student')->skip('3')->take(2)->get('name');

        // // linmit
        // $students = DB::table('student')->limit(4)->get('email');
        // //limit and offset works together
        // $students = DB::table('student')->offset(4)->limit(1)->get('email');
        // dd($students);

        //insert multiple records
        /*DB::table('student')->insert([
            ['name'=>'Jaideep','email'=>'jaideep@gmail.com','city'=>'delhi','marks'=>53,'pass_date'=>'2020-12-17'],
            ['name'=>'Pratham','email'=>'barua@gmail.com','city'=>'delhi','marks'=>57,'pass_date'=>'2021-08-01'],
        ]);*/

        //insert or ignore
       /* DB::table('student')->insertOrIgnore([
            'id'=>'4',
            'name'=>'Amrisha',
            'email'=>'apriya@hotmail.com',
            'city'=>'dhanbad',
            'marks'=>78,
            'pass_date'=>'2016-05-04'
        ]);

        //insertGetId
        $id = DB::table('student')->insertGetId([
            'name'=>'Dheeraj Panwar',
            'email'=>'panwari@gmail.com',
            'city'=>'Noida',
            'marks'=>45,
            'pass_date'=>'2018-08-21'
        ]);

        dd($id);    */


        /* update */
        // DB::table('student')->where('id','=',2)->update([
        //     'name'=>'Paras',
        //     'email'=>'khuranna@gmail.com'
        // ]);

        // update or insert
       /* DB::table('student')->updateOrInsert(
            ['name'=>'Raj'],
            ['email'=>'Trivediji@gmail.com','city'=>'Trilokpuri','marks'=>41,'pass_date'=>'2017-03-25']
        );  */

        /*  delete method */
        // DB::table('student')->where('id','=','8')->delete();

        //truncate
        // DB::table('student')->truncate();
        return view('studentDetails',['students'=>$students]);
    }
}
