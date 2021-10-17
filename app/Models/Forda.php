<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forda extends Model
{
    use HasFactory;
    protected $table='forda';
    protected $fillable=[
        'daerah',
        'nama_pj',
        'id_line_pj',
        'hp_pj',
        'nama_rek',
        'nama_bank',
        'no_rek',
        'link_meet',
        'cp_lain'
    ];

    public function user(){
        return $this->morphOne(User::class,'user');
    }

    public function peserta(){
        return $this->hasMany(Peserta::class);
    }

    public function biaya(){
        return $this->hasMany(Biaya::class);
    }
    
    public function rekening(){
        return $this->hasMany(Rekening::class);
    }

    public function absen(){
        return $this->hasOne(Absen::class);
    }
    
    public function group(){
        return $this->hasMany(Group::class);
    }
}
