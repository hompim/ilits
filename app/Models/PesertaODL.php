<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaODL extends Model
{
    use HasFactory;

    protected $table = 'peserta_odl';

    protected $fillable = [
        'peserta_id',
        'kelas_id'
    ];

    public function peserta(){
        return $this->belongsTo(PesertaEvent::class, 'peserta_id');
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
