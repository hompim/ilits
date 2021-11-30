<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $guarded = ['departemen_id'];
    public $timestamps = FALSE;
    
    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }
}
