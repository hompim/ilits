<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;

class QnAController extends Controller
{
    public function index()
    {
        return view('tanya-jawab');
    }
    //F1 get image
    public function getImageQuestion(Request $request)
    {
        try {
            $subtes = $request->subtes;
            $kode_soal = $request->kode_soal;
            $nomer_soal = $request->nomer_soal;
            $getimage = Comments::select('link_gambar')
                ->where('subtes', $subtes)
                ->where('kode_soal', '=', $kode_soal)
                ->where('nomer_soal', '=', $nomer_soal)
                ->where('parent_id', '=', null);
            return view('tanya-jawab', [
                'getimage' => $getimage
            ]);
        } catch (Exception $e) {
            abort(404, 'Custom 404 error message');
        }
    }

    //F4 getComments --> subtes, kode_soal, nomer_soal, parent_id = null -> paginate();
    public function getComment()
    {
        try {
            $subtes = $request->subtes;
            $kode_soal = $request->kode_soal;
            $nomer_soal = $request->nomer_soal;
            $list = Comments::join('users', 'comments.user_id', '=', 'users.id')
                ->where('subtes', $subtes)
                ->where('kode_soal', '=', $kode_soal)
                ->where('nomer_soal', '=', $nomer_soal)
                ->where('parent_id', '=', null)
                ->paginate(15);
            return view('tanya-jawab', [
                'list' => $list
            ]);
        } catch (Exception $e) {
            abort(404, 'Custom 404 error message');
        }
    }

    public function postComment(Request $request)
    {
    	$request->validate([
            'comment'=>'required|max:256',
            // reply peserta max:3
        ]);
        
        //subtes_id, kode_soal, nomer_soal, user_id, parent_id
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
    
        Comments::create($input);
   
        return back();
    }
}
