<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfomhsController extends Controller
{
    public function index()
    {
        return view('users.infomhs'); // Sesuaikan dengan path view
    }
}
