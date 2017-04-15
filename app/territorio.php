<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Territorio extends Model
{
    protected $table = "territorios";

    protected $fillable = ['constRural', 'constUrbano', 'constTotal', 'terrRural', 'terrUrbano', 'terrTotal', 'idGeneralidadesTerritorios'];
}
