<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;

class FakultasController extends Controller
{
    public function index($id){
        $fakultas = Fakultas::find($id);
        return view('fakultas',[
            'fakultas' => $fakultas,
        ]);
    }
}
