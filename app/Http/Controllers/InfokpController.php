<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfokpController extends Controller
{
    public function index()
    {
        return view('admin.infokp'); // Sesuaikan dengan path view
    }
}
