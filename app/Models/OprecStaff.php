<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OprecStaff extends Model
{
    use HasFactory;

    protected $table = 'oprec_staff';

    protected $guarded = [];
    // protected $appends = ['status_label'];

    public function getStatusSeleksiBerkas(){
        if($this->status_divisi==0){
            return '<span class="badge badge-pill badge-danger">Tidak lolos</span>';
        } else if($this->status_divisi==1){
            return ('<span class="badge badge-pill badge-success">Lolos seleksi berkas ' + $this->pilihan_1 + '</span>');
        } else if($this->status_divisi==2){
            return ('<span class="badge badge-pill badge-success">Lolos seleksi berkas ' + $this->pilihan_2 + '</span>');
        }
    }

    public function getStatusStaff(){
        if($this->is_staff==true){
            if($this->status_divisi==1){
                return ('<span class="badge badge-pill badge-success">Lolos staff ' + $this->pilihan_1 + '</span>');
            } else if($this->status_divisi==2){
                return ('<span class="badge badge-pill badge-success">Lolos staff ' + $this->pilihan_2 + '</span>');
            }
        } else{
            return ('<span class="badge badge-pill badge-success">Tidak lolos staff</span>');
        }
    }
}
