<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaFnD extends Model
{
    use HasFactory;

    protected $table = 'peserta_fnd';

    protected $fillable = [
        'peserta_id',
        'departemen_id'
    ];

    public function departemen(){
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }

    public function peserta(){
        return $this->belongsTo(PesertaEvent::class, 'peserta_id');
    }
}
