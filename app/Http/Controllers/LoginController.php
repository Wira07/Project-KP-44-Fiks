<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle login request.
     */
    public function login(Request $request)
    {
        // Validasi input
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
                    return redirect()->route('admin.infokp')->with('success', 'Welcome Admin!');
                case 'staff_umum':
                    return redirect()->route('staffumum.infokpsu')->with('success', 'Welcome Staff Umum!');
                case 'staff_keuangan':
                    return redirect()->route('staffkeu.infokpsk')->with('success', 'Welcome Staff Keuangan!');
                default:
                    Auth::logout();
                    return redirect('/login')->with('error', 'Role not recognized. Please contact support.');
            }
        }

        // Kembali jika login gagal
        return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
    }

    /**
     * Handle logout request.
     */
    public function logout()
    {
        Auth::logout();

        // Redirect ke halaman login dengan pesan
        return redirect('/login')->with('success', 'You have been logged out successfully.');
    }
}
