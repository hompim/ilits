<?php
namespace App\Services;

class QnAService extends Controller {
    //Do something
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
