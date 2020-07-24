<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = new Role();
        $role->nombre = 'Administrador';//1
        $role->save();

        $role = new Role();
        $role->nombre = 'Cajero';//2
        $role->save();

        $role = new Role();
        $role->nombre = 'Contador';//3
        $role->save();

        $role = new Role();
        $role->nombre = 'Lecturador';//4
        $role->save();

        $role = new Role();
        $role->nombre = 'Asesor de Registo';//5
        $role->save();
    }
}
