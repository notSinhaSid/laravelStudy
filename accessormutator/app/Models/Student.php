<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    //Accessor 

    public function getNameAttribute($value)
    {
        // return ucfirst($value);
        return 'Mr '. $value;
    }

    public function setCityAttribute($value)
    {
        $this->attributes['city'] = ucfirst($value). ', India';
    }
}
