<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    public function inventario()
    {
        return $this->belongsTo('App\Inventario');
    }
    public function usuario()
    {
        return $this->belongsTo('App\Inventario');
    }
}
