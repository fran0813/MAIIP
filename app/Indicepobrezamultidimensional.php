<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicepobrezamultidimensional extends Model
{
    protected $table = "Indicepobrezamultidimensional";

    protected $fillable = ['altTasDepEco',
            'ana',
            'bajLogEdu',
            'barAccSerSal',
            'barAccSerCiu',
            'empInf',
            'hac',
            'inaEliExc',
            'inaEsc',
            'parIna',
            'pisIna',
            'rezEsc',
            'sinAccFueAgMej',
            'sinAseSal',
            'traInf',
            'economicosocial_id'];

    public function econmicosocial()
    {
        return $this->belongsTo('App\EconomicoSocial');
    }
}
