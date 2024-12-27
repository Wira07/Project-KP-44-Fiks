<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\DosenController; 
use App\Http\Controllers\InfokelompokController;
use App\Http\Controllers\MitraController; 
use App\Http\Controllers\StaffController; 
use App\Http\Controllers\InfokpController; 
use App\Http\Controllers\InfoumumController; 
use App\Http\Controllers\RegisterController; 
use App\Http\Controllers\InfomhsController; 
use App\Http\Controllers\InfokpusersController; 
use App\Http\Controllers\SuratmitraController;
use App\Http\Controllers\InfokpskController;
use App\Http\Controllers\InfokpsuController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('admin.login');
});

Route::get('/home', function () {
    return view('admin.home');
})->name('home');

Route::get('/login', function () {
    return view('admin.login');
})->name('login');

Route::post('/home', [HomeController::class, 'index'])->name('home');
Route::get('kelompok', [KelompokController::class, 'index'])->name('kelompok'); 
Route::get('dosen', [DosenController::class, 'index'])->name('dosen'); 
Route::get('mitra', [MitraController::class, 'index'])->name('mitra'); 
Route::get('staff', [StaffController::class, 'index'])->name('staff'); 
Route::get('infokp', [InfokpController::class, 'index'])->name('infokp');
Route::get('infoumum', [InfoumumController::class, 'index'])->name('infoumum');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::get('infokelompok', [InfokelompokController::class, 'index'])->name('infokelompok');
Route::get('infomhs', [InfomhsController::class, 'index'])->name('infomhs');
Route::get('infokpusers', [InfokpusersController::class, 'index'])->name('infokpusers');
Route::get('suratmitra', [SuratmitraController::class, 'index'])->name('suratmitra');
Route::get('infokpsk', [InfokpskController::class, 'index'])->name('infokpsk');
Route::get('infokpsu', [InfokpsuController::class, 'index'])->name('infokpsu');
Route::get('validasi', [ValidasiController::class, 'index'])->name('validasi');
Route::get('login', [LoginController::class, 'login'])->name('login');

Route::post('login', [LoginController::class, 'login'])->name('login.submit');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Role-based routes for admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.home');
    Route::get('/admin/infokp', function () {
        return view('admin.infokp');
    })->name('admin.infokp');
});

// Role-based routes for staff umum
Route::middleware(['auth', 'role:staffumum'])->group(function () {
    Route::get('/staffumum/infokpsu', function () {
        return view('staffumum.infokpsu');
    })->name('staffumum.infokpsu');
});

// Role-based routes for staff keuangan
Route::middleware(['auth', 'role:staffkeu'])->group(function () {
    Route::get('/staffkeu/infokpsk', function () {
        return view('staffkeu.infokpsk');
    })->name('staffkeu.infokpsk');
});

// General authenticated routes (for common users)
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    Route::get('home', [HomeController::class, 'index'])->name('home');
});

// Ensure login route exists
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Post login and logout routes
Route::post('login', [LoginController::class, 'login'])->name('login.submit');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


