<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\DosenController; // Tambahkan impor untuk DosenController
use App\Http\Controllers\MitraController; // Tambahkan impor untuk MitraController
use App\Http\Controllers\StaffController; // Tambahkan impor untuk StaffController

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
    return view('layouts.login');
});

Route::get('/home', function () {
    return view('layouts.home');
})->name('home');

Route::post('/home', [HomeController::class, 'index'])->name('home');
Route::get('kelompok', [KelompokController::class, 'index'])->name('kelompok'); // Rute untuk Kelompok
Route::get('dosen', [DosenController::class, 'index'])->name('dosen'); // Rute untuk Dosen
Route::get('mitra', [MitraController::class, 'index'])->name('mitra'); // Rute untuk Mitra
Route::get('staff', [StaffController::class, 'index'])->name('staff'); // Rute untuk Staff

// Route::get('home', [HomeController::class, 'index'])->name('home');
