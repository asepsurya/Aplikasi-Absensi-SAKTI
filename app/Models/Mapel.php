<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function grupMapel(){
        return $this->belongsTo('App\Models\grupMapel','id','id_mapel');
    }
}
