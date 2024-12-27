<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\DosenController; // Tambahkan impor untuk DosenController
use App\Http\Controllers\InfokelompokController;
use App\Http\Controllers\MitraController; // Tambahkan impor untuk MitraController
use App\Http\Controllers\StaffController; // Tambahkan impor untuk StaffController
use App\Http\Controllers\InfokpController; // Tambahkan impor untuk StaffController
use App\Http\Controllers\InfoumumController; // Tambahkan impor untuk StaffController
use App\Http\Controllers\RegisterController; // Tambahkan impor untuk StaffController
use App\Http\Controllers\InfomhsController; // Tambahkan impor untuk StaffController
use App\Http\Controllers\InfokpusersController; // Tambahkan impor untuk StaffController
use App\Http\Controllers\SuratmitraController;
use App\Http\Controllers\InfokpskController;
use App\Http\Controllers\InfokpsuController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

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
Route::get('kelompok', [KelompokController::class, 'index'])->name('kelompok'); // Rute untuk Kelompok
Route::get('dosen', [DosenController::class, 'index'])->name('dosen'); // Rute untuk Dosen
Route::get('mitra', [MitraController::class, 'index'])->name('mitra'); // Rute untuk Mitra
Route::get('staff', [StaffController::class, 'index'])->name('staff'); // Rute untuk Staff
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

// Role-based routes
Route::middleware(['admin', 'role:admin'])->group(function () {
    Route::get('/admin/infokp', function () {
        return view('admin.infokp');
    })->name('admin.infokp');
});

Route::middleware(['admin', 'role:staff_umum'])->group(function () {
    Route::get('/staffumum/infokpsu', function () {
        return view('staffumum.infokpsu');
    })->name('staffumum.infokpsu');
});

Route::middleware(['admin', 'role:staff_keuangan'])->group(function () {
    Route::get('/staffkeu/infokpsk', function () {
        return view('staffkeu.infokpsk');
    })->name('staffkeu.infokpsk');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

Route::get('/login', function () {
    return view('auth.login'); 
})->name('login');

// Route::middleware(['auth'])->group(function () {
//     Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// });



// Route::get('home', [HomeController::class, 'index'])->name('home');
