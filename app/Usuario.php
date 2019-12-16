<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $guarded = [];

    public function movimientos()
    {
        return $this->hasMany('App\Movimiento');
    }

    public function farmacia()
    {
        return $this->belongsTo('App\Farmacia');
    }
}
