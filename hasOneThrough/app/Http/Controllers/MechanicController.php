<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanic;
use App\Models\Car;
use App\Models\Owner;

class MechanicController extends Controller
{
    public function add_mechanic()
    {
        $mechanic = new Mechanic();
        $mechanic->name = "Alex";
        $mechanic->save();
    }

}
