<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesion extends Model
{
    protected $table = "lesion";

    protected $fillable = ['femenino', 'fatTot',
            'fatHom',
            'fatMuj',
            'noFatTot',
            'noFatHom',
            'noFatMuj',
            'seguridadviolencia_id'];

    public function seguridadviolencia()
    {
        return $this->belongsTo('App\Seguridadviolencia');
    }
}
