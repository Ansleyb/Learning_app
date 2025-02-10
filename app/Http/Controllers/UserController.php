<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('user.login');
    }

    // Handle user login
    public function login(Request $request)
    {
        // Validate the login form
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to login
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            // Redirect to user dashboard after successful login
            return redirect()->route('user.dashboard');
        }

        // If authentication fails, redirect back with an error message
        return back()->withErrors(['login_failed' => 'Invalid credentials. Please try again.']);
    }

    // Show the user dashboard
    public function dashboard()
    {
        return view('user.dashboard');
    }

// UserController.php

public function logout()
{
    Auth::logout();
    return redirect()->route('user.login.form');
}


}
