<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = '/';
    protected function redirectTo()
    {
        $auth = Auth::user();
        if ($auth->hasRole('admin')) {
            return route('admin');
        } elseif ($auth->hasRole('staffkeu')) {
            return route('staff-keuangan');
        } elseif ($auth->hasRole('staffumum')) {
            return route('staff-umum');
        } elseif ($auth->hasRole('user')) {
            return route('user');
        }

        // Jika tidak ada role yang cocok, arahkan ke halaman default
        return '/home';
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
