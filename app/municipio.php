<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = "municipios";

    protected $fillable = ['codigo', 'nombre', 'departamento_id'];

    // Relacion muchos a uno con departamento
    public function departamento()
    {
        return $this->belongsTo('App\Departamento');
    }

    // Relacion uno a muchos con generalidaterritorio
    public function generalidadesterritorios()
    {
        return $this->hasMany('App\Generalidadterritorio');
    }

    // Relacion uno a muchos con demografia
    public function demografias()
    {
        return $this->hasMany('App\Demografia');
    }
}
