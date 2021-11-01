<?php

namespace App\Models;

use App\Models\TryoutForda;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forda extends Model
{
    use HasFactory;
    protected $table = 'forda';
    protected $fillable = [
        'nama'
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'user');
    }

    public function daerah()
    {
        return $this->belongsToMany(KotaKab::class, 'forda_daerah', 'forda_id', 'kota_kab_id')->withPivot('created_at', 'updated_at');
    }
    public function tryoutForda()
    {
        return $this->hasone(TryoutForda::class, 'forda_id');
    }
}
