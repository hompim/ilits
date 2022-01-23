<?php
namespace App\Services;

use App\Models\Comments;
use App\Models\Soal;

class QnAService {
    public function getImageQuestion($data)
    {
        $subtes = $data['subtes'];
        $kode_soal = $data['kode_soal'];
        $nomer_soal = $data['nomer_soal'];
        $getimage = Soal::select('link_gambar')
            ->where('subtes', $subtes)
            ->where('kode_soal', '=', $kode_soal)
            ->where('nomer_soal', '=', $nomer_soal)
            ->first();
        return $getimage;
    }

    public function getComments($data){
        $subtes = $data['subtes'];
        $kode_soal = $data['kode_soal'];
        $nomer_soal = $data['nomer_soal'];
        $list = Comments::join('users', 'comments.user_id', '=', 'users.id')
                ->where('subtes', $subtes)
                ->where('kode_soal', '=', $kode_soal)
                ->where('nomer_soal', '=', $nomer_soal)
                ->where('parent_id', '=', null)
                ->paginate(15);
        return $list;
    }
}
