<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generalidadterritorio extends Model
{
    protected $table = "generalidadesterritorios";

    protected $fillable = ['anio', 'temperatura', 'alturaNivMar', 'atMun', 'idMunicipios'];

    // Relacion muchos a uno con municipio
    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }

    // Relacion uno a uno con generalidad
    public function generalidad()
    {
        return $this->hasOne('App\Generalidad');
    }

    // Relacion uno a uno con territorio
    public function territorio()
    {
        return $this->hasOne('App\Territorio');
    }

    // Relacion uno a uno con predios
    public function predio()
    {
        return $this->hasOne('App\Predio');
    }

}
