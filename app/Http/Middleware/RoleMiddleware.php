<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Cek apakah pengguna sudah login
        if (Auth::check()) {
            $user = Auth::user();

            // Periksa apakah role pengguna sesuai dengan salah satu role yang dibutuhkan
            if (in_array($user->role, $roles)) {
                return $next($request);
            }

            // Redirect pengguna ke halaman sesuai dengan role mereka jika role tidak sesuai
            return $this->redirectByRole($user);
        }

        // Jika pengguna belum login, arahkan ke halaman login
        return redirect('/login')->with('error', 'Please login to access this page.');
    }

    /**
     * Redirect pengguna berdasarkan role.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function redirectByRole($user)
    {
        switch ($user->role) {
            case 'admin':
                return redirect()->route('admin.home');
            case 'staffkeu':
                return redirect()->route('staffkeu.infokpsk');
            case 'staffumum':
                return redirect()->route('staffumum.infokpsu');
            default:
                // Jika role tidak dikenali, logout dan arahkan ke login
                Auth::logout();
                return redirect('/login')->with('error', 'Unauthorized access.');
        }
    }
}
