<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use App\Models\Fasilitas;
use App\Models\Alumni;
use App\Models\Akreditasi;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    public function index($id){
        $departemen = Departemen::find($id);
        $fasilitas = $departemen->fasilitas;
        $alumni = $departemen->alumni;
        $akreditasi = $departemen->akreditasi;
        return view('departemen',[
            'fasilitas' => $fasilitas,
            'alumni' =>$alumni,
            'departemen' => $departemen,
            'akreditasi' => $akreditasi
        ]);
    }
}
