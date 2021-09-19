<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OprecStaffResult extends Model
{
    use HasFactory;

    protected $table = 'oprec_staff_results';

    protected $guarded = [];

    public $timestamps = false;
}
