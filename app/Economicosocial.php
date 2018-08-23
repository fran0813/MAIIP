<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Economicosocial extends Model
{
    protected $table = "economicosocial";

    protected $fillable = ['anioES',
            'numHecSemBos',
            'areAgrCosTot',
            'proAgrTot',
            'proCar',
            'invBovTotMac',
            'invBovTotHem',
            'invBovTot',
            'incImpTot',
            'incImpRur',
            'incImpUrb',
            'municipio_id'];

    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }

    public function unidadcomercial()
    {
        return $this->hasOne('App\UnidadComercial');
    }

    public function indicepobrezamultidimensional()
    {
        return $this->hasOne('App\indicePobrezaMultidimensional');
    }

}
