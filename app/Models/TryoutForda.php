<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TryoutForda extends Model
{
    use HasFactory;
    protected $table = 'tryout_forda';
    protected $fillable = [
        'sesi_tanggal',
        'link_meet',
        'nama_rek',
        'nama_bank',
        'no_rek',
        'nama_pj',
        'hp_pj',
        'id_line_pj',
    ];
    public function forda()
    {
        return $this->belongsTo(Forda::class, 'forda_id');
    }
}
