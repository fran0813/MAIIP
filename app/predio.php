<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $table = "predios";

    protected $fillable = ['ruralP', 'urbanoP', 'totalP', 'generalidadterritorio_id'];

    // Relacion uno a uno con generalidadterritorio
    public function generalidadterritorio()
    {
        return $this->belongsTo('App\Generalidadterritorio');
    }
}
