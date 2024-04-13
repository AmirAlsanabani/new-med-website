<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'lastname' => 'required',
            'age' => 'required|numeric',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'policy' => 'accepted',
        ]);

        // Create a new member instance
        $member = new Member();
        $member->name = $validatedData['first_name'] . ' ' . $validatedData['lastname'];
        $member->email = $validatedData['email'];
        $member->password = Hash::make($validatedData['password']);
        $member->phone_nubmer = $validatedData['phone'];
        $member->age = $validatedData['age'];

        // Save the member to the database
        $member->save();

        // Redirect or do something else
        return redirect()->back()->with('success', 'Registration successful!');
    }
}
