<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaEvent extends Model
{
    use HasFactory;

    protected $table = 'peserta_events';

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'sesi_fakultas');
    }

    public function departemen_fnd()
    {
        return $this->belongsToMany(Departemen::class, 'peserta_fnd','peserta_id','departemen_id');
    }

    public function kelas_odl()
    {
        return $this->belongsToMany(Kelas::class, 'peserta_odl', 'peserta_id', 'kelas_id');
    }
}
