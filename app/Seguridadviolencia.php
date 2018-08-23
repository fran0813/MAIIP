<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguridadviolencia extends Model
{
    protected $table = "seguridadviolencia";

    protected $fillable = ['anioSV',
            'tasDesEscTot',
            'tasHom',
            'tasIncDen',
            'tasLesPer',
            'tasMueAcc',
            'tasSui',
            'vioInt',
            'casTot',
            'casTasHom',
            'municipio_id'];

    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }

    public function delito()
    {
        return $this->hasOne('App\Delito');
    }

    public function lesion()
    {
        return $this->hasOne('App\Lesion');
    }

    public function violencia()
    {
        return $this->hasOne('App\Vilencia');
    }
}
