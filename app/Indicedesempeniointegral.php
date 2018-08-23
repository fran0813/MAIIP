<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicedesempeniointegral extends Model
{
    protected $table = "indicedesempeñointegral";

    protected $fillable = ['desIntCapAdm', 'desIntEfiTot', 'desIntGes', 'desIntIndInt', 'desIntReqLeg', 'desIntIndDesFis', 'finanza_id',];

    public function finanza()
    {
        return $this->belongsTo('App\Finanza');
    }
}
