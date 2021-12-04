<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    public $timestamps = FALSE;

    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }
}
