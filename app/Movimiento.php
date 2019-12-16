<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $guarded = [];

    protected $casts = [
        'fecha_movimiento' => 'datetime:d-m-Y'
    ];

    public function inventario()
    {
        return $this->belongsTo('App\Inventario');
    }
    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }
}
