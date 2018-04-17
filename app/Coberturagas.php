<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coberturagas extends Model
{
    protected $table = "coberturagas";

    protected $fillable = ['cabCG', 'centPobCG', 'rurDispCG', 'viviendaserviciopublico_id'];
    
    public function viviendaserviciopublico()
    {
        return $this->belongsTo('App\Viviendaserviciopublico');
    }
}
