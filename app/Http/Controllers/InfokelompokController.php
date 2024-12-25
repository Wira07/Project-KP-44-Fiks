<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfokelompokController extends Controller
{
    public function index()
    {
        return view('users.infokelompok'); // Sesuaikan dengan path view
    }
}
