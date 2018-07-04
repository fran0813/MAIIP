<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidadcomercial extends Model
{
    protected $table = "Unidadcomercial";

    protected $fillable = ['uniCom',
            'uniSer',
            'uniGraCom',
            'uniGraInd',
            'uniGraSer',
            'uniInd',
            'uniMedCom',
            'uniMedInd',
            'uniMedSer',
            'uniMicCom',
            'uniMicInd',
            'uniMicSer',
            'uniPeqCom',
            'uniPeqInd',
            'uniPeqSer',
            'economicosocial_id'];

    public function econmicosocial()
    {
        return $this->belongsTo('App\EconomicoSocial');
    }
}
