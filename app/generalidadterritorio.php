<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generalidadterritorio extends Model
{
    protected $table = "generalidadesterritorios";

    protected $fillable = ['anio', 'temperatura', 'alturaNivMar', 'atMun', 'idMunicipios'];
}
