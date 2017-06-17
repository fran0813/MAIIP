<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coberturaalcantarillado extends Model
{
	protected $table = "coberturaalcantarillado";

    protected $fillable = ['cabCA', 'centPobCA', 'rurDispCA', 'viviendaserviciopublico_id';

    // Relacion uno a uno con viviendaserviciopublico
    public function viviendaserviciopublico()
    {
        return $this->belongsTo('App\Viviendaserviciopublico');
    }
}
