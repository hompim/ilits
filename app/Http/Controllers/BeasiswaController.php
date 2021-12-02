<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa;

class BeasiswaController extends Controller
{
    public function index(){
        $beasiswa = Beasiswa::all();
        return view('beasiswa',[
            'beasiswa'=>$beasiswa
        ]);
    }
}
