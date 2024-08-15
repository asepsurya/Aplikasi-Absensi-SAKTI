<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function jurusanKelas(){
        return $this->belongsTo('App\Models\jurusan','id_jurusan','id');
    }
}
