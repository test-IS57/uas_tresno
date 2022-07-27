<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    public function jabatans(){
        return $this->hasOne(Jabatan::class,'id','jabatans_id');
    }
}
