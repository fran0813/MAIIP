<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Violencia extends Model
{
	protected $table = "violencia";

    protected $fillable = ['femenino', 'may',
            'otrFam',
            'inf',
            'seguridadviolencia_id'];

    public function seguridadviolencia()
    {
        return $this->belongsTo('App\Seguridadviolencia');
    }
}
