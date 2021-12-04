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

    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class);
    }

    public function aktivitas_mahasiswa()
    {
        return $this->hasMany(AktivitasMahasiswa::class);
    }

    public function prospek_kerja()
    {
        return $this->hasMany(ProspekKerja::class);
    }

    public function alumni()
    {
        return $this->hasMany(Alumni::class);
    }

    public function akreditasi()
    {
        return $this->hasMany(Akreditasi::class);
    }
    
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
    }

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class);
    }
}
