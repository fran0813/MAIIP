<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Educacion extends Model
{
    protected $table = "educacion";

    protected $fillable = ['anioE','rurJardin','urbJardin','rurTrans','urbTrans','rurPrim','urbPrim','rurSecu','urbSecu','rurMedia','urbMedia','municipio_id'];

    // Relacion muchos a uno con municipio
    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }

    // Relacion uno a uno con matriculapornivel
    public function matriculapornivel()
    {
        return $this->hasOne('App\Matriculapornivel');
    }

    // Relacion uno a uno con matriculaporgenero
    public function matriculaporgenero()
    {
        return $this->hasOne('App\Matriculaporgenero');
    }
}
