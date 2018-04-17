<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = "municipios";

    protected $fillable = ['codigoM', 'nombre', 'catMun', 'departamento_id'];

    public function departamento()
    {
        return $this->belongsTo('App\Departamento');
    }

    public function generalidadesterritorios()
    {
        return $this->hasMany('App\Generalidadterritorio');
    }

    public function demografias()
    {
        return $this->hasMany('App\Demografia');
    }

    public function viviendaserviciospublicos()
    {
        return $this->hasMany('App\Viviendaserviciospublicos');
    }

    public function salud()
    {
        return $this->hasMany('App\Salud');
    }

    public function educacion()
    {
        return $this->hasMany('App\Educacion');
    }
}
