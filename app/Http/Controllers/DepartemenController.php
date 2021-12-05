<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    public function index($id){
        $departemen = Departemen::find($id);
        $fasilitas = $departemen->fasilitas;
        $alumni = $departemen->alumni;
        $akreditasi = $departemen->akreditasi;
        $prestasi = $departemen->prestasi;
        // if($fasilitas->count()!=0){
        //     dd($fasilitas->count());
        // }

        return view('departemen',[
            'fasilitas' => $fasilitas,
            'alumni' =>$alumni,
            'departemen' => $departemen,
            'akreditasi' => $akreditasi,
            'prestasi' => $prestasi,
        ]);
    }
}
