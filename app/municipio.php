<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = "municipios";

    protected $fillable = ['codigo', 'nombre', 'catMun', 'departamento_id'];

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

    // Relacion uno a muchos con viviendaserviciospublicos
    public function viviendaserviciospublicos()
    {
        return $this->hasMany('App\Viviendaserviciospublicos');
    }

    // Relacion uno a muchos con salud
    public function salud()
    {
        return $this->hasMany('App\Salud');
    }

    // Relacion uno a muchos con educacion
    public function educacion()
    {
        return $this->hasMany('App\Educacion');
    }
}
