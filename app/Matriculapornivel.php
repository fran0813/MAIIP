<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matriculapornivel extends Model
{
    protected $table = "matriculapornivel";

    protected $fillable = ['jardin', 'trans', 'prim', 'secu','media','educacion_id'];

    // Relacion uno a uno con educacion
    public function educacion()
    {
        return $this->belongsTo('App\Educacion');
    }
}
