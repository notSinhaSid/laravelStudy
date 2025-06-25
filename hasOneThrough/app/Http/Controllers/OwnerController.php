<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mechanic;
use App\Models\Car;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function add_owner($id)
    {
        $car = Car::find($id);

        $owner = new Owner();
        $owner->name = 'Tanishq';

        $car->owner()->save($owner);
    }

    //get owner using mechanic id since using intermidiate

    public function get_owner($id)
    {
        /*method 1
        $mechanic = Mechanic::find($id)->cars->owner;

        return $mechanic;
*/
        $owner = Mechanic::find($id)->owner;

        return $owner;
    }
}
