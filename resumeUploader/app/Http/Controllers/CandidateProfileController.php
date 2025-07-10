<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CandidateProfile;

class CandidateProfileController extends Controller
{
    public function profilesave(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'dob' => 'required|date',
            'state' => 'required',
            'gender' => 'required',
            'location' => 'required',
            'profileImage' => 'required|image',
            'resumedocs' => 'required|file'
        ]);

        $profileImage = $request->file('profileImage')->store('/profile_images', 'public');

        $resumedocs = $request->file('resumedocs')->store('/resumedocs', 'public');

        $candidate = CandidateProfile::create([
            'name' => $request->name,
            'email' => $request->email,
            'dob' => $request->dob,
            'state' => $request->state,
            'gender' => $request->gender,
            'location' => json_encode($request->location),
            'profileImage' => $profileImage,
            'resumedocs' => $resumedocs
        ]);

        return response([
            'message' => 'Resume has been uploaded',
            'status' => 'success',
            'candidate_details' => $candidate
        ], 201);
    }
}
