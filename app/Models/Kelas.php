<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    public function sesi_odl()
    {
        return $this->belongsTo(SesiODL::class, 'sesi_id');
    }

    public function departemen()
    {
        return $this->hasMany(Departemen::class);
    }

    public function kelas_odl()
    {
        return $this->belongsToMany(PesertaEvent::class, 'peserta_odl','kelas_id','peserta_id');
    }
}
