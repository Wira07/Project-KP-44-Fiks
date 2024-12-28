<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

// Route untuk admin
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('admin', function () {
        return 'admin';
    })->name('admin');
});

// Route untuk staff keuangan
Route::group(['middleware' => ['role:staffkeu']], function () {
    Route::get('staff-keuangan', function () {
        return 'staff keuangan';
    })->name('staff-keuangan');
});

// Route untuk staff umum
Route::group(['middleware' => ['role:staffumum']], function () {
    Route::get('staff-umum', function () {
        return 'staff umum';
    })->name('staff-umum');
});

// Route untuk user/mahasiswa
Route::group(['middleware' => ['role:user']], function () {
    Route::get(
        'mahasiswa',
        function () {
            return 'mahasiswa';
        }
    )->name('user');
});
