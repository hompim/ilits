<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;

class FakultasController extends Controller
{
    public function index($slug){
        $fakultas = Fakultas::where('slug',$slug)->first();
        return view('fakultas',[
            'fakultas' => $fakultas,
        ]);
    }
}
