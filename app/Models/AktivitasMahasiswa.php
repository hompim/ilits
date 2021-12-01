<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktivitasMahasiswa extends Model
{
    use HasFactory;

    protected $guarded = ['departemen_id'];
    public $timestamps = false;
    
    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }
}
