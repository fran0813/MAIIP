<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demografia extends Model
{
    protected $table = "demografias";

    protected $fillable = ['anioD', 'pobEdadTrabajar', 'pobPotActiva', 'pobPotInactiva', 'numPerMen', 'numPerMay', 'numPerInd', 'numPerDep', 'pobHom', 'pobMuj', 'pobZonCab', 'pobZonRes', 'indRuralidad', 'pobTotal', 'crecPob', 'municipio_id'];

    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }
}
