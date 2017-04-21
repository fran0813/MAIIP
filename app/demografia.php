<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demografia extends Model
{
    protected $table = "demografias";

    protected $fillable = ['anio', 'pobEdadTrabajar', 'pobPotActiva', 'pobPotInactiva', 'numPerMen', 'numPerMay', 'numPerInd', 'numPerDep', 'pobHom', 'pobMuj', 'pobZonCab', 'pobZonRes', 'indRuralidad', 'pobTotal', 'crecPob', 'municipio_id'];

    // Relacion muchos a uno con municipio
    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }
}
