<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = "departamentos";

    protected $fillable = ['codigo', 'nombre'];

    // Relacion uno a muchos con municipios
    public function municipios()
    {
        return $this->hasMany('App\Municipio');
    }
}
