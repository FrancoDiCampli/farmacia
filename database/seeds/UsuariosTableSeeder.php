<?php

use App\Usuario;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nombre' => 'administrador',
            'email' => 'admin@mail.com',
            'password' => bcrypt('asdf1234'),
            'perfil' => 1,
            'farmacia_id' => 1,
            'direccion' => 'casa central',
            'telefono' => '432212',

        ]);
    }
}
