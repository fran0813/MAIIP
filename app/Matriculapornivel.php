<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matriculapornivel extends Model
{
    protected $table = "matriculapornivel";

    protected $fillable = ['jardin', 'trans', 'prim', 'secu','media','educacion_id'];

    public function educacion()
    {
        return $this->belongsTo('App\Educacion');
    }
}
