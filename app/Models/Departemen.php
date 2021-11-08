<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;

    protected $table = 'departemens';

    public function sesi_fnd()
    {
        return $this->belongsTo(SesiFnd::class, 'sesi_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function departemen_fnd()
    {
        return $this->belongsToMany(PesertaEvent::class, 'peserta_fnd', 'departemen_id', 'peserta_id');
    }
}
