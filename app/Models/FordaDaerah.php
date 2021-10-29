<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FordaDaerah extends Model
{
    use HasFactory;
    protected $table='forda_daerah';
    protected $fillable=[
        'forda_id',
        'kota_kab_id'
    ];

    public function forda(){
        return $this->belongsTo(Forda::class, 'forda_id');
    }

    public function kota_kab(){
        return $this->belongsTo(KotaKab::class, 'kota_kab_id');
    }
}
