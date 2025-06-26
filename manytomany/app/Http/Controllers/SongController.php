<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Singer;

class SongController extends Controller
{
    public function add_song()
    {
        $song = new Song();
        $song->title = 'Closer';
        $song->save();
    }

    //get song based on singer id

    public function get_song($id)
    {
        // dd($id);
        $song = Singer::find($id)->songs;
        return $song;
        // var_dump($song);
    }
}
