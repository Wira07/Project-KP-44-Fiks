<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfokpusersController extends Controller
{
    public function index()
    {
        return view('users.infokpusers'); // Sesuaikan dengan path view
    }
}
