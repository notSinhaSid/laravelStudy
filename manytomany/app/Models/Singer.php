<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Song;
use App\Models\Singer;

class Singer extends Model
{
    use HasFactory;

    public function songs()
    {
        return $this->belongsToMany(Song::class, 'singer_songs');
    }
}
