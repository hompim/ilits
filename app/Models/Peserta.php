<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $table = 'peserta';
    protected $fillable = [
        'asal_sekolah',
        'asal_daerah',
        'forda_id',
        'no_wa',
        'bukti_bayar',
        'status',
        'kartu_pelajar',
        'pilihan_tryout',
        'session_id_tryout',
        'token_tryout',
        'status_absen',
        'keterangan_absen',
        'jam_absen'
    ];
    public function user()
    {
        return $this->morphOne(User::class, 'user');
    }

    public function forda()
    {
        return $this->belongsTo(Forda::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
