<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salud extends Model
{
    protected $table = "salud";

    protected $fillable = ['anioS','municipio_id'];

    // Relacion muchos a uno con municipio
    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }

    // Relacion uno a uno con discapacidades
    public function discapacidades()
    {
        return $this->hasOne('App\Discapacidades');
    }

    // Relacion uno a uno con vacunaciones
    public function vacunaciones()
    {
        return $this->hasOne('App\Vacunaciones');
    }
}
