<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Educacion extends Model
{
    protected $table = "educacion";

    protected $fillable = ['anioE','rurJardin','urbJardin','rurTrans','urbTrans','rurPrim','urbPrim','rurSecu','urbSecu','rurMedia','urbMedia','municipio_id'];

    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }

    public function matriculapornivel()
    {
        return $this->hasOne('App\Matriculapornivel');
    }

    public function matriculaporgenero()
    {
        return $this->hasOne('App\Matriculaporgenero');
    }
}
