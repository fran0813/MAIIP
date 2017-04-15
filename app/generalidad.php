<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generalidad extends Model
{
    protected $table = "generalidades";

    protected $fillable = ['rural', 'urbano', 'total', 'generalidadterritorio_id'];

    // Relacion uno a uno con generalidadterritorio
    public function generalidadterritorio()
    {
        return $this->belongsTo('App\Generalidadterritorio');
    }
}
