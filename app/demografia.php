<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demografia extends Model
{
    protected $table = "demografias";

    protected $fillable = ['anio', 'pobEdadTrabajar', 'pobPotInactiva', 'numPerMen', 'numPermay', 'numPerInd', 'numPerDep', 'pobHom', 'pobMuj', 'pobZonCab', 'pobZonRes', 'indRuralidad', 'pobTotal', 'crecPob', 'idMunicipios'];
}
