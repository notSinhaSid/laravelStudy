<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PasswordResetToken;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;

class PasswordResetController extends Controller
{
    public function sendPasswordResetEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        $email = $request->email;

        //check if the requested email exsists or not
        $user = User::where('email', $request->email)->first();

        if(!$user)
        {
            return response([
                'message' => 'No user found with this email',
                'status' => 'failed'
            ], 404);
        }

        $token = Str::random(60);
        PasswordResetToken::create([
            'email' => $request->email,
            'token' => $token,
        ]);


        //sending email for reseting the password

        Mail::send('resetpassword', ['token'=>$token], function (Message $message)use($email){
            $message->subject('Reset you password');
            $message->to($email);
        });

        return response([
            'message' => 'Password reset email sent successfully',
            'status' => 'success'
        ], 200);
    }

    //resetting password form
    public function reset(Request $request, string $token)
    {
        //delete token older than 5 minutes
        $formatted = Carbon::now()->subMinutes(5);
        PasswordResetToken::where('created_at', '<', $formatted)->delete();

        $request->validate([
            'password' => 'required|confirmed'
        ]);

        $reset_token = PasswordResetToken::where('token', $token)->first();

        if(!$reset_token)
        {
            return response([
                'message' => 'Invalid token or expired',
                'status' => 'failed'
            ], 404);
        }

        $user = User::where('email', $reset_token->email)->first();
        if(!$user)
        {
            return response([
                'message' => 'No user found for this email',
                'status' => 'failed'
            ], 404);
        }
        
        $user->password = Hash::make($request->password);
        $user->save();

        PasswordResetToken::where('email', $user->email)->delete();
        return response([
            'message' => 'Password reset successfully',
            'status' => 'success'
        ], 200);
    }

}
