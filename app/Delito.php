<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delito extends Model
{
    protected $table = "delitosexual";

    protected $fillable = ['femenino', 'tot',
            'hom',
            'muj',
            'seguridadviolencia_id'];

    public function seguridadviolencia()
    {
        return $this->belongsTo('App\Seguridadviolencia');
    }
}
