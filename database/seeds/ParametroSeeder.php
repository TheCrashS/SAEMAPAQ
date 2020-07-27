<?php

use App\Parametro;
use Illuminate\Database\Seeder;

class ParametroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parametro= new Parametro();
        $parametro->val1='Domiciliario';
        $parametro->val2='Comercial';
        $parametro->val3='Empresarial';
    }
}


