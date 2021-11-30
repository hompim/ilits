<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $table = 'fakultas';

    protected $fillable = ['id','nama','foto','deskripsi','link_zoom','updated_at','created_at'];

    public function sesi_fnd()
    {
        return $this->belongsTo(SesiFnd::class);
    }
    
    public function departemen()
    {
        return $this->hasMany(Fakultas::class);
    }
}
