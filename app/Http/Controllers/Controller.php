<?php

namespace App\Http\Controllers;

use iluminate\Http\Request;

abstract class Controller
{
    public function index()
    {
        return view('landing');
    }
}
