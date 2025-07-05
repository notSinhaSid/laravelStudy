<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('user_auth_token')->plainTextToken;
        return response([
            'user' => $user,
            'token' => $token,
            'token_type' => 'Bearer',
        ], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $token = $user->createToken('user_auth_token')->plainTextToken;
            return response([
                'user' => $user,
                'token' => $token,
                'token_type' => 'Bearer',
            ]);
        } else {
            return response([
                'message' => 'Invalid credentials',
            ], 401);
        }
    }

    public function logout()
    {
        auth()->user()->currentAccessToken()->delete();
        return response([
            'message' => 'You have been logged out successfully',
        ]);
    }
}
