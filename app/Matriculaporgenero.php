<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matriculaporgenero extends Model
{
    protected $table = "matriculaporgenero";

    protected $fillable = ['femenino', 'masculino','educacion_id'];

    // Relacion uno a uno con educacion
    public function educacion()
    {
        return $this->belongsTo('App\Educacion');
    }
}
