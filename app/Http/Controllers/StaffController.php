<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        return view('layouts.staff'); // Mengarahkan ke view layouts/kelompok
    }
}