<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Create a single login form for both users & admins
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Check User Login
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('user.dashboard'); 
        } else {
            \Log::error('User login failed', $credentials);
        }
    
        // Check Admin Login
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard'); 
        } else {
            \Log::error('Admin login failed', $credentials);
        }
    
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
    

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate(); // Invalidate session
    $request->session()->regenerateToken(); // Regenerate CSRF token

        return redirect('/'); // Redirect back to login
    }
}

