<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Soal;
use App\Services\QnAService;
use Illuminate\Support\Facades\Auth;

class QnAController extends Controller
{
    public QnAService $qnAService;
    public function __construct(){
        $this->qnAService = new QnAService();
    }

    public function index(Request $request)
    {
        try{
            $subtes = $request->subtes;
            $kode_soal = $request->kode_soal;
            $nomer_soal = $request->nomer_soal;
            $data = compact('subtes', 'kode_soal', 'nomer_soal');
            $image = $this->qnAService->getImageQuestion($data);
            $list = $this->qnAService->getComments($data);
            return view('tanya-jawab');
        } catch(\Exception $e){
            abort(404, 'Custom 404 error message');
        }
    }

    public function postComment(Request $request)
    {
    	$request->validate([
            'comment'=>'required|max:256'
        ]);
        
        //subtes_id, kode_soal, nomer_soal, user_id, parent_id
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
    
        Comments::create($input);
    
        return back();
    }
}
