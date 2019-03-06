<?php

use Illuminate\Database\Seeder;
use pokemon\Role;  //especificamos el modelo que vamos a usar

class RoleTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->nombrerol = 'admin';
        $role->descripcionrol = 'administrador';
        $role->save();

        $role = new Role();
        $role->nombrerol = 'usuario';
        $role->descripcionrol = 'usuario';
        $role->save();
    }
}
