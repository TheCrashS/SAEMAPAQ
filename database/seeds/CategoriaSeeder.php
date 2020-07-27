<?php

use Illuminate\Database\Seeder;
Use App\Categoria;
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria= new Categoria ();
        $categoria->nombre='Domiciliario';
        $categoria->tarifa=15;
        $categoria->save();

        $categoria= new Categoria();
        $categoria->nombre='Comercial';
        $categoria->tarifa=18.5;
        $categoria->save();

        $categoria= new Categoria();
        $categoria->nombre='Empresarial';
        $categoria->tarifa=15;
        $categoria->save();


    }
}
