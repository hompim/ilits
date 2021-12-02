<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class AlumniController extends Controller
{
    public function show(){
        $alumni = Alumni::whereNotNull('deskripsi')->get();
        return view("alumni",[
            'alumni' => $alumni
        ]);
    }
}
