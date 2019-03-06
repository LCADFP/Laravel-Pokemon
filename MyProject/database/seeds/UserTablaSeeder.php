<?php

use Illuminate\Database\Seeder;
use pokemon\Role;
use pokemon\User;

class UserTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where("nombrerol", "usuario")->first();
        $role_admin = Role::where("nombrerol", "admin")->first();

        $usuario = new User();
        $usuario->name = 'user';
        $usuario->email = 'user@mail.com';
        $usuario->password = bcrypt('query');
        $usuario->save();
        $usuario->roles()->attach($role_user);

        $usuario = new User();
        $usuario->name = 'admin';
        $usuario->email = 'admin@mail.com';
        $usuario->password = bcrypt('query');
        $usuario->save();
        $usuario->roles()->attach($role_admin);


    }
}
