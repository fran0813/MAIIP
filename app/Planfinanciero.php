<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planfinanciero extends Model
{
    protected $table = "planfinanciero";

    protected $fillable = ['ingTot', 'ingCor', 'ingTri', 'ingPre', 'ingIndCom', 'ingSobGas', 'ingOtr', 'ingNoTri', 'ingTra', 'ingNivNac', 'ingNoTriOtr', 'gasTot', 'gasCor', 'fun', 'serFun', 'gasGen', 'traPag', 'intDeuPub', 'defAhoCor', 'ingCap', 'reg', 'traNac', 'cof', 'ingCapOtr', 'gasCap', 'forBruCapFij', 'gasCapOtr', 'defSupTot', 'fin', 'creNet', 'des', 'amo', 'recBalVarDepOtr', 'finanza_id'];

    public function finanza()
    {
        return $this->belongsTo('App\Finanza');
    }
}
