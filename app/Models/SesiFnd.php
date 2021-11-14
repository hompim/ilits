<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SesiFnd extends Model
{
    use HasFactory;

    protected $table = 'sesi_fnds';

    public function departemen()
    {
        return $this->hasMany(Departemen::class, 'sesi_id');
    }

    public function fakultas()
    {
        return $this->hasMany(Fakultas::class, 'sesi_id');
    }
}
