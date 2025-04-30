<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //image controller function

    function showImage()
    {
        return view('Imageshow/image');
    }
}
