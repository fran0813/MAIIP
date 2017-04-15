<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demografia extends Model
{
    protected $table = "demografias";

    protected $fileable = ['anio', 'pobEdadTrabajar', 'pobPotInactiva', 'numPerMen', 'numPermay', 'numPerInd', 'numPerDep', 'pobHom', 'pobMuj', 'pobZonCab', 'pobZonRes', 'indRuralidad', 'pobTotal', 'crecPob', 'idMunicipios']
}
