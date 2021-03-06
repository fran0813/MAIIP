<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacunaciones extends Model
{
    protected $table = "vacunaciones";

    protected $fillable = ['tasVacBCG', 'tasVacDPT', 'tasVacHepatitisB', 'tasVacHIB','tasVacPolio','tasVacTripleViral','salud_id'];

    public function salud()
    {
        return $this->belongsTo('App\Salud');
    }
}
