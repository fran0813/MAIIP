<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class predio extends Model
{
    protected $table = "predios";

    protected $fileable = ['rural', 'urbano', 'total', 'idGeneralidadesTerritorios']
}
