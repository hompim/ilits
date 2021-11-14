<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SesiODL extends Model
{
    use HasFactory;

    protected $table = 'sesi_odls';

    public function kelas()
    {
        return $this->hasMany(Kelas::class,'sesi_id');
    }
}
