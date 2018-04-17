<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salud extends Model
{
    protected $table = "salud";

    protected $fillable = ['anioS','municipio_id'];

    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }

    public function discapacidades()
    {
        return $this->hasOne('App\Discapacidades');
    }

    public function vacunaciones()
    {
        return $this->hasOne('App\Vacunaciones');
    }
}
