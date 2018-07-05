<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicedesempeñofiscal extends Model
{
    protected $table = "indicedesempeñofiscal";

    protected $fillable = ['autGasFun', 'respSerDeu', 'depTraNacReg', 'genRecPro', 'magInv', 'capAho', 'indDesFis', 'posNivNac', 'posNivDep', 'finanza_id',];

    public function finanza()
    {
        return $this->belongsTo('App\Finanza');
    }
}
