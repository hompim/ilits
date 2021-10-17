<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FordaController extends Controller
{
    public function index()
    {
        return view('forda.dashboard');
    }
}
