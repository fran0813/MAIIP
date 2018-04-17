<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generalidadterritorio extends Model
{
    protected $table = "generalidadesterritorios";

    protected $fillable = ['anioGT', 'temperatura', 'alturaNivMar', 'municipio_id'];

    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }

    public function generalidad()
    {
        return $this->hasOne('App\Generalidad');
    }

    public function territorio()
    {
        return $this->hasOne('App\Territorio');
    }

    public function predio()
    {
        return $this->hasOne('App\Predio');
    }

}
