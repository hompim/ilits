<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;
use App\Models\Alumni;
use App\Models\Fasilitas;
use App\Models\Beasiswa;
use App\Models\Eventual;
use App\Models\Prestasi;

class MainController extends Controller
{
    public function index(){
        $fakultas = Fakultas::all();
        $beasiswa = Beasiswa::all()->random(3);
        $eventual = Eventual::all();
        $fasilitas = Fasilitas::whereNotNull("deskripsi")->get()->random(5);
        $alumni = Alumni::whereNotNull('deskripsi')->get()->random(3);
        $prestasi = Prestasi::all()->random(10);
        return view('main',[
            'fakultas'=>$fakultas,
            'beasiswa' => $beasiswa,
            'alumni' => $alumni,
            'eventual'=> $eventual,
            'fasilitas' => $fasilitas,
            'prestasi' => $prestasi,
        ]);
    }
}
