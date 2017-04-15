<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class generalidadterritorio extends Model
{
    protected $table = "generalidadesterritorios";

    protected $fileable = ['anio', 'temperatura', 'alturaNivMar', 'atMun', 'idMunicipios']
}
