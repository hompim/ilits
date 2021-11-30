<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenCampusController extends Controller
{
    public function opsi()
    {
        return view('open-campus.opsi',["title" => "Opsi FnD"]);
    }

    public function chooseFnD() 
    {
        
    }
}
