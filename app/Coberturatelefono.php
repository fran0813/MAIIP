<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coberturatelefono extends Model
{
    protected $table = "coberturatelefono";

    protected $fillable = ['cabCT', 'centPobCT', 'rurDispCT', 'viviendaserviciopublico_id';

    // Relacion uno a uno con viviendaserviciopublico
    public function viviendaserviciopublico()
    {
        return $this->belongsTo('App\Viviendaserviciopublico');
    }
}
