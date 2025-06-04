<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //this is the basic syntax to insert data usin Seeder

        /*DB::table('student')->insert([
             'name'=>'Siddhartha',
             'email'=>'sid@gmail.com',
             'password'=>Hash::make('123456'),
         ]); */

        //this is usingg the call function for insertingg data from database seeder file
        // DB::table('student')->insert([
        //     'name'=>'Ritikesh',
        //     'email'=>'temu@gmail.com',
        //     'password'=>Hash::make('789456'),
        // ]);

        // using the Str random method to insert random data in the input
        // DB::table('student')->insert([
        //     'name'=>Str::random(7),
        //     'email'=>Str::random(10).'@gmail.com',
        //     'password'=>Hash::make(Str::random(6)),
        // ]);

        // using the facker package to insert proper dummy data

        $faker = Faker::create();
        DB::table('student')->insert([
            'name'=> $faker->name,
            'email'=> $faker->unique()->safeEmail(),
            'password'=> Hash::make($faker->password(8,12)),
        ]);

    }
}
