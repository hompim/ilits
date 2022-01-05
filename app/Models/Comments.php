<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $guard = [];

    public function replies(){
        if(!$this->parent_id){
            return $this->hasMany(Comments::class);
        }
        return null;
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function parentComment(){
        if($this->parent_id){
            return $this->belongsTo(Comments::class, 'parent_id');
        }
        return null;
    }
}
