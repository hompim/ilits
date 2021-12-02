<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
            $fasilitas = Fasilitas::whereNotNull("foto")->get();
            //$fasil = $fasilitas->where('foto',"!=",NULL)->get();
            return view('fasilitas',[
                'fasilitas' => $fasilitas
            ]);
    }
}
