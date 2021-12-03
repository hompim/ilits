<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    public function index($id){
        $departemen = Departemen::find($id);
        // find: id
        // 
        return view('departemen',[
            'departemen' => $departemen,
        ]);
    }
}
