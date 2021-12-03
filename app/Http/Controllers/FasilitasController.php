<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
            $fasilitas = Fasilitas::whereNotNull("deskripsi")->get()->random(15);
            //$fasil = $fasilitas->where('foto',"!=",NULL)->get();
            return view('fasilitas',[
                'fasilitas' => $fasilitas
            ]);
    }
}
