<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = 'provinsi';
    protected $guarded = [];

    public $timestamps = false;
    
    public function kotakab(){
        return $this->hasMany(KotaKab::class, 'kota_kab_id');
    }

}
