<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use App\Models\Car;
use App\Models\Owner;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function create_car($id)
    {
        $mechanic = Mechanic::find($id);
        $cars = new Car();
        $cars->model = 'Suzuki S-cross';
        $mechanic->cars()->save($cars);

    }
}
