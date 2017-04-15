<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class territorio extends Model
{
    protected $table = "territorios";

    protected $fileable = ['constRural', 'constUrbano', 'constTotal', 'terrRural', 'terrUrbano', 'terrTotal', 'idGeneralidadesTerritorios']
}
