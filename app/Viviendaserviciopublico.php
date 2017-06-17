<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viviendaserviciopublico extends Model
{
    protected $table = "viviendasserviciospublicos";

    protected $fillable = ['anioVSP', 'cabViv', 'cabHog', 'cabHogViv','cabPerHog','cabPerViv','rurViv','rurHog','rurHogViv','rurPerHog','rurPerViv','totalViv','totalHog','totalHogViv','totalPerHog','totalPerViv','municipio_id'];

    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }

    // Relacion uno a uno con coberturaalcantarillado
    public function coberturaalcantarillado()
    {
        return $this->hasOne('App\Coberturaalcantarillado');
    }

    // Relacion uno a uno con coberturaaseo
    public function coberturaaseo()
    {
        return $this->hasOne('App\Coberturaaseo');
    }

    // Relacion uno a uno con coberturagas
    public function coberturagas()
    {
        return $this->hasOne('App\Coberturagas');
    }

    // Relacion uno a uno con coberturatelefono
    public function coberturatelefono()
    {
        return $this->hasOne('App\Coberturatelefono');
    }
}
