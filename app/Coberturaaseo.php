<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coberturaaseo extends Model
{
    protected $table = "coberturaaseo";

    protected $fillable = ['cabCAs', 'centPobCAs', 'rurDispCAs', 'viviendaserviciopublico_id'];

    public function viviendaserviciopublico()
    {
        return $this->belongsTo('App\Viviendaserviciopublico');
    }
}
