<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelompokController extends Controller
{
    public function index()
    {
        return view('layouts.kelompok'); // Mengarahkan ke view layouts/kelompok
    }
}
