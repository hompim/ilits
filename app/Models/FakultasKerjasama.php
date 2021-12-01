<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FakultasKerjasama extends Model
{
    use HasFactory;
    protected $table = "fakultas_kerjasamas";
    public $timestamps = FALSE;

    public function fakultas(){
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
    }
}
