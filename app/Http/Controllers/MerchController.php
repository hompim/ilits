<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merch;

class MerchController extends Controller
{
    public function index(){
        $merch = Merch::all();
        return view('merchandise',[
            'merch' => $merch,
        ]);
    }
}
