<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finanza extends Model
{
    protected $table = "finanza";

    protected $fillable = ['anioF', 'municipio_id',];

    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }

    public function planfinanciero()
    {
        return $this->hasOne('App\PlanFinanciero');
    }

    public function ejecucionpresupuesto()
    {
        return $this->hasOne('App\EjecucionPresupuesto');
    }

    public function indicedesempeñoIntegral()
    {
        return $this->hasOne('App\IndiceDesempeñoIntegral');
    }

    public function indicedesempeñoFiscal()
    {
        return $this->hasOne('App\IndiceDesempeñoFiscal');
    }
}
