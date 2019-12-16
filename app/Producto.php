<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $guarded = [];

    public function inventarios()
    {
        return $this->hasMany('App\Inventario');
    }
}
