<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generalidad extends Model
{
    protected $table = "generalidades";

    protected $fillable = ['rural', 'urbano', 'total', 'idGeneralidadesTerritorios'];
}
