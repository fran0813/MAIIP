<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Territorio extends Model
{
    protected $table = "territorios";

    protected $fillable = ['constRural', 'constUrbano', 'constTotal', 'terrRural', 'terrUrbano', 'terrTotal', 'idGeneralidadesTerritorios'];

    // Relacion uno a uno con generalidadterritorio
    public function generalidadterritorio()
    {
        return $this->belongsTo('App\Generalidadterritorio');
    }
}
