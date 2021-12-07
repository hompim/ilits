<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventual;

class EventualController extends Controller
{
    public function chooseEvent($id){
        $event = Eventual::find($id);
        $res = [
            'nama' => $event->nama,
            'deskripsi' => $event->deskripsi,
        ];
        return json_encode($res);
    }
}
