<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KotaKab extends Model
{
    use HasFactory;

    protected $table = 'kota_kab';
    protected $guarded = [];

    public $timestamps = false;

    public function provinsi(){
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }
}
