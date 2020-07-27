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

        $contribuyente= new contribuyente();
        $contribuyente->nombres ='Mario';
        $contribuyente->apellidos='';
        $contribuyente->ci='5874129';
      $contribuyente->save();
    }
}
