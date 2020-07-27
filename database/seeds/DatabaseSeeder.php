<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call([
            CategoriaSeeder::class,
            ParametroSeeder::class,
            ContribuyenteSeeder::class,
            MedidorSeeder::class,
            LecturacionSeeder::class,
            CobroSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,

        ]);
    }
}
