<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $table = 'peserta';
    protected $fillable = [
        'nama_lengkap',
        'provinsi_domisili_id',
        'kab_domisili_id',
        'alamat',
        'asal_sekolah',
        'kab_sekolah_id',
        'no_wa',
        'is_pelajar_aktif',
        'tau_ilits',
        'forda_id'
    ];
    public function forda()
    {
        return $this->belongsTo(Forda::class, 'forda_id');
    }

    public function kabSekolah()
    {
        return $this->belongsTo(KotaKab::class, 'kab_sekolah_id');
    }

    public function kabDomisili()
    {
        return $this->belongsTo(KotaKab::class, 'kab_domisili_id');
    }

    public function user()
    {
        return $this->morphOne(User::class, 'user');
    }

    public function peserta_event(){
        return $this->hasOne(PesertaEvent::class, 'peserta_id');
    }
}
