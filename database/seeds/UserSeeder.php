<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e = '@saemapaq.ss';

        //ADMINISTRADOR
        $user = new User();
        $user->name = 'nameAdmin';
        $user->email = 'admin'.$e;
        $user->email_verified_at=null;
        $user->password=bcrypt('123');
        $user->lastname='lastnameAdmin';
        $user->ci='1234567';
        $user->job='Gerente';
        $user->phone=74521452;
        $user->state=true;
        $user->role_id = 1; //Admin

        $user->save();

        //CAJERO
        $user = new User();
        $user->name = 'nameCajero';
        $user->email = 'cajero'.$e;
        $user->email_verified_at=null;
        $user->password=bcrypt('123');
        $user->lastname='lastnameCajero';
        $user->ci='2234567';
        $user->job='Cajero';
        $user->phone=75412788;
        $user->state=true;
        $user->role_id = 2; //Cajero

        $user->save();

        //CONTADOR
        $user = new User();
        $user->name = 'nameConta';
        $user->email = 'conta'.$e;
        $user->email_verified_at=null;
        $user->password=bcrypt('123');
        $user->lastname='lastnameConta';
        $user->ci='3234567';
        $user->job='Contador';
        $user->phone=74154255;
        $user->state=true;
        $user->role_id = 3; //Contador

        $user->save();

        //LECTURADOR
        $user = new User();
        $user->name = 'nameLectu';
        $user->email = 'lectu'.$e;
        $user->email_verified_at=null;
        $user->password=bcrypt('123');
        $user->lastname='lastnameLectu';
        $user->ci='4234567';
        $user->job='Lecturador';
        $user->phone=64512589;
        $user->state=true;
        $user->role_id = 4; //Lecturador

        $user->save();

        //ASESOR DE REGISTROS
        $user = new User();
        $user->name = 'nameAsesor';
        $user->email = 'asesor'.$e;
        $user->email_verified_at=null;
        $user->password=bcrypt('123');
        $user->lastname='lastnameAsesor';
        $user->ci='5234567';
        $user->job='Asesor de Registros';
        $user->phone=65233569;
        $user->state=true;
        $user->role_id = 5; //Asesor

        $user->save();
    }
}
