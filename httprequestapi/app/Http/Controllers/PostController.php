<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function post()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        // dd($response->collect());
        return view('home', ['data'=>$response->collect()]);
    }

    public function postwithid($id)
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        // dd($response->collect());
        return view('singlepost', ['data'=>$response->collect()]);
    }

    public function createpost()
    {
        $response = Http::withHeaders([
            'x-api-key' => env('REQRES_API_KEY'),
        ])->post('https://reqres.in/api/users',[
            'name' => 'morpheus',
            'job' => 'leader'
        ]);
        
        dd($response->json());

    }

    public function updatepost($id){
        $response = Http::withHeaders([
            'x-api-key' => env('REQRES_API_KEY'),
        ])->put('https://reqres.in/api/users/'.$id,[
            'name' => 'morpheus',
            'job' => 'zion resident'
        ]);

        dd($response->json());
        
    }


    public function deletepost($id)
    {
        $response = Http::withHeaders([
            'x-api-key'=>env('REQRES_API_KEY'),
        ])->delete('https://reqres.in/api/users/'.$id);

        dd($response);
    }

    public function getInfo()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/1');
        // $response = Http::timeout(5)->get('https://jsonplaceholder.typicode.com/posts/1');
        // $response = Http::retry(5, 160)->get('https://jsonplaceholder.typicode.com/posts/1');
        // $response = Http::withHeaders('Content-Type'=>'application/json')->get('https://jsonplaceholder.typicode.com/posts/1');
        // ['title];
        // dd($response->body());
        // dd($response->json());
        // dd($response->collect());
        // dd($response->collect()->all());
        // dd($response->status());
        // dd($response->ok());
        // dd($response->successful());
        // dd($response->failed());
        // dd($response->serverError());
        // dd($response->clientError());
        // dd($response->headers());
        dd($response->headers());
        return view('info');
    }
}
