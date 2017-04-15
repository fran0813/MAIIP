<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class generalidad extends Model
{
    protected $table = "generalidades";

    protected $fileable = ['rural', 'urbano', 'total', 'idGeneralidadesTerritorios']
}
