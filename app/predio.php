<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $table = "predios";

    protected $fillable = ['rural', 'urbano', 'total', 'idGeneralidadesTerritorios'];
}
