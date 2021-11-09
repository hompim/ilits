<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $table = 'fakultas';

    public function sesi_fnd()
    {
        return $this->belongsTo(SesiFnd::class, 'sesi_id');
    }
}
