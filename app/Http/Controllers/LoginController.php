<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
            
        $credentials = $request->only('email', 'password');

        // Encode password input pengguna ke base64
        $credentials['password'] = base64_encode($credentials['password']);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Redirect berdasarkan role
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.infokp');
                case 'staff_umum':
                    return redirect()->route('staffumum.infokpsu');
                case 'staff_keuangan':
                    return redirect()->route('staffkeu.infokpsk');
                default:
                    Auth::logout();
                    return redirect('/login')->with('error', 'Role not recognized.');
            }
        }

        return redirect()->back()->with('error', 'Invalid credentials.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
