<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
    public function usuarios()
    {
        return $this->hasMany('App\Usuario');
    }

    public function inventarios()
    {
        return $this->hasMany('App\Inventario');
    }
}
