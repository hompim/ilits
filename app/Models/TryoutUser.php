<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TryoutUser extends Model
{
    use HasFactory;
    protected $table = 'tryout_user';
    protected $fillable = [
        'status_bayar',
        'pilihan_tryout',
        'username_tryput',
        'password_tryout',
        'status_absen',
        'keterangan_absen',
        'user_id'
    ];
    public function user()
    {
        return $this->morphOne(User::class, 'user');
    }
}
