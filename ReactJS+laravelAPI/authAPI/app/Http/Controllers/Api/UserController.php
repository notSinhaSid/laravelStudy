<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    // user sign up process

    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|',
            'password' => 'required|confirmed',
            'TandC' => 'required'
        ]);

        if(User::where('email', $request->email)->first())
        {
            return response([
                'message' => 'This email is already in use. Please use another email, or login.',
                'status' => 'failed'
            ], 409);
        }
        else
        {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'TandC' => json_decode($request->TandC), 
            ]);

            $token = $user->createToken($request->email)->plainTextToken;

            return response([
                'message' => 'You are signed up successfully',
                'status' => 'success',
                'user' => $user,
                'token' => $token,
                'token_type' => 'Bearer'
            ], 201);
        }
    }

    //login function

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password))
        {
            return response([
                'message' => 'Invalid Credentials',
                'status' => 'failed'
            ], 401);
        }

        $token = $user->createToken($request->email)->plainTextToken;

        return response([
            'message' => 'Login Successful',
            'status' => 'success',
            'token' => $token,
            'token_type' => 'Bearer',

        ], 200);
    }

    //logout function

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response([
                'message' => 'Logged out.',
                'status' => 'success'
            ], 200);
    }

    //logged user
    public function loggedUser()
    {
        $loggedUser = auth()->user();
            return response([
                'users' => $loggedUser,
                'message' => 'Logged user',
                'status' => 'Currently logged in'
            ], 200);
    }

    //change password ----------------------------------------------------------------------------------------

    public function changePassword(Request $request)
    {
        try
        {
            $request->validate([
                'old_password' => 'required',
                'password' => 'required|confirmed'
            ]);

            //check if the old password is correct or not
            $loggedUser = auth()->user();
            if(!Hash::check($request->old_password, $loggedUser->password))
            {
                return response([
                    'message' => 'Old Password is in correct',
                    'status' => 'failed'
                ], 401);
            }
            //check if the old and new password are same or not
            if(Hash::check($request->password, $loggedUser->password))
            {
                return response([
                    'message' => 'Old and new Password can not be same',
                    'status' => 'failed'
                ], 401);
            }

            $loggedUser->password = Hash::make($request->password);

            $loggedUser->save();

            return response([
                'message' => 'You have changed you password successfully',
                'status' => 'success'
            ], 200);
        }
        catch(\Exception $e)
        {
            return response([
                'message' => 'Something went wrong',
                'status' => 'failed'
            ], 500);
        }
    }
}
