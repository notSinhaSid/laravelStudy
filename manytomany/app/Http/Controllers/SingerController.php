<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singer;
use App\Models\Song;
class SingerController extends Controller
{
    public function songPerformed()
    {
        $singer = new Singer();
        $singer->name = 'Halsey';
        $singer->save();

        $songid = [5];
        $singer->songs()->attach($songid);
    }

    //get singer using song id
    public function get_singer($id)
    {
        $singer = Song::find($id)->singers;
        return $singer;
    }
}
