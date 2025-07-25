<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Singer;

class Song extends Model
{
    use HasFactory;
    public function singers()
    {
        return $this->belongsToMany(Singer::class, 'singer_songs');
    }
}
