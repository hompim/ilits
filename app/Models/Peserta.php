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
        'kab_sekolah_sekolah',
        'no_wa',
        'is_pelajar_aktif',
        'tau_ilits',
        'forda_id'
    ];
    public function user()
    {
        return $this->morphOne(User::class, 'user');
    }

    public function forda()
    {
        return $this->belongsTo(Forda::class);
    }
    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }
    public function kabupaten()
    {
        return $this->belongsTo(KotaKab::class);
    }
    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
