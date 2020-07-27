<?php

use Illuminate\Database\Seeder;
use App\Lecturacion;

class LecturacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecturacion= new Lecturacion();
        $lecturacion->medidor_id=1;
        $lecturacion->consumo=7568;
        $lecturacion->monto=75;
        $lecturacion->save();
        $lecturacion= new Lecturacion();
        $lecturacion->medidor_id=2;
        $lecturacion->consumo=7568;
        $lecturacion->monto=75;
        $lecturacion->save();
        $lecturacion= new Lecturacion();
        $lecturacion->medidor_id=3;
        $lecturacion->consumo=7568;
        $lecturacion->monto=75;
        $lecturacion->save();
        $lecturacion= new Lecturacion();
        $lecturacion->medidor_id=4;
        $lecturacion->consumo=7568;
        $lecturacion->monto=75;
        $lecturacion->save();
        $lecturacion= new Lecturacion();
        $lecturacion->medidor_id=5;
        $lecturacion->consumo=7568;
        $lecturacion->monto=75;
        $lecturacion->save();
        $lecturacion= new Lecturacion();
        $lecturacion->medidor_id=6;
        $lecturacion->consumo=7568;
        $lecturacion->monto=75;
        $lecturacion->save();
    }
}
