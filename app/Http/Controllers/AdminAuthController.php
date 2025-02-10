<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Assuming your view file is named login.blade.php
    }

    public function login(Request $request)
    {
        // Validate the input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to log in using the admin guard
        if (Auth::guard('admin')->attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])) {
            // Redirect to the admin dashboard if login is successful
            return redirect()->route('admin.dashboard');
        }

        // If login fails, redirect back with an error message
        return back()->withErrors([
            'username' => 'Invalid credentials.',
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/'); // Redirect to homepage or login page
    }
}
