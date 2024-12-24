<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfokpController extends Controller
{
    public function index()
    {
        return view('layouts.infokp'); // Sesuaikan dengan path view
    }
}
