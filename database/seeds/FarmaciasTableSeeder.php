<?php

use App\Farmacia;
use Illuminate\Database\Seeder;

class FarmaciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Farmacia::create([
            'cufe' => '12345678',
            'direccion' => 'casa central',
            'telefono' => '4321123',
            'razon_social' => 'casa central',
            'cuit' => '00000000000',
            'encargado' => 'administrador',

        ]);
        Farmacia::create([
            'cufe' => '12345679',
            'direccion' => 'suc2',
            'telefono' => '4321123',
            'razon_social' => 'sucursal 2',
            'cuit' => '00000000000',
            'encargado' => 'encargado 2',

        ]);
        Farmacia::create([
            'cufe' => '12345678',
            'direccion' => 'suc1',
            'telefono' => '4321123',
            'razon_social' => 'sucursal 1',
            'cuit' => '00000000000',
            'encargado' => 'encargado 1',

        ]);
    }
}
