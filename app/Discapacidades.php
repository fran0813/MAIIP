<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discapacidades extends Model
{
    protected $table = "discapacidades";

    protected $fillable = ['difBaMov', 'difEntApr', 'difMovCam', 'difSalirCalle','totalDis','salud_id'];

    public function salud()
    {
        return $this->belongsTo('App\Salud');
    }
}
