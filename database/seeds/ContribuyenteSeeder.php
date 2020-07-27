<?php

use App\Contribuyente;
use Illuminate\Database\Seeder;

class ContribuyenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $contribuyente= new Contribuyente();
        $contribuyente->nombres ='Mario';
        $contribuyente->apellidos='Mario';
        $contribuyente->ci=5874129;
        $contribuyente->fecha_nac='2020-11-01';
        $contribuyente->telefono=87787877;
        $contribuyente->direccion='Av. Siempre Viva 89';
        $contribuyente->save();

        $contribuyente= new Contribuyente();
        $contribuyente->nombres ='Luigi';
        $contribuyente->apellidos='Mario';
        $contribuyente->ci=4568465;
        $contribuyente->fecha_nac='2020-11-01';
        $contribuyente->telefono='89898844';
        $contribuyente->direccion='Av. Siempre Viva 88';
        $contribuyente->save();


        $contribuyente= new Contribuyente();
        $contribuyente->nombres ='Jorge';
        $contribuyente->apellidos='Oporto';
        $contribuyente->ci='121212';
        $contribuyente->fecha_nac='2020-11-01';
        $contribuyente->telefono='89898844';
        $contribuyente->direccion='Av. Siempre Viva 88';
        $contribuyente->save();


        $contribuyente= new Contribuyente();
        $contribuyente->nombres ='Sergio';
        $contribuyente->apellidos='Chungara';
        $contribuyente->ci='131313';
        $contribuyente->fecha_nac='2020-11-01';
        $contribuyente->telefono='89898844';
        $contribuyente->direccion='Av. Siempre Viva 88';
        $contribuyente->save();

        $contribuyente= new Contribuyente();
        $contribuyente->nombres ='Miguel';
        $contribuyente->apellidos='Aguilar';
        $contribuyente->ci='14141414';
        $contribuyente->fecha_nac='2020-11-01';
        $contribuyente->telefono='89898844';
        $contribuyente->direccion='Av. Siempre Viva 88';
        $contribuyente->save();


        $contribuyente= new Contribuyente();
        $contribuyente->nombres ='Carlos';
        $contribuyente->apellidos='Lopez';
        $contribuyente->ci='151515';
        $contribuyente->fecha_nac='2020-11-01';
        $contribuyente->telefono='89898844';
        $contribuyente->direccion='Av. Siempre Viva 88';
        $contribuyente->save();

        $contribuyente= new Contribuyente();
        $contribuyente->nombres ='Belén';
        $contribuyente->apellidos='Quispe';
        $contribuyente->ci='161616';
        $contribuyente->fecha_nac='2020-11-01';
        $contribuyente->telefono='89898844';
        $contribuyente->direccion='Av. Siempre Viva 88';
        $contribuyente->save();

    }
}
