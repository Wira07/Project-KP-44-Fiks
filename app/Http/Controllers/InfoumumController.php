<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoumumController extends Controller
{
    public function index()
    {
        return view('admin.infoumum'); // Sesuaikan dengan path view
    }
}
