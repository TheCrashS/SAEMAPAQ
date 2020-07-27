<?php
use App\Medidor;
use Illuminate\Database\Seeder;

class MedidorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e = '@saemapaq.ss';
        $medidor= new Medidor();
        $medidor->codigo='111111';
        $medidor->val_1=' ';
        $medidor->val_2=' ';
        $medidor->val_3=' ';
        $medidor->direccion='Calle Bustillos #231';
        $medidor->contribuyente_id=1;
        $medidor->categoria_id=1;
        $medidor->save();


        $medidor= new Medidor();
        $medidor->codigo='222222';
        $medidor->val_1=' ';
        $medidor->val_2=' ';
        $medidor->val_3=' ';
        $medidor->direccion='Calle Camacho #432';
        $medidor->contribuyente_id=1;
        $medidor->categoria_id=1;
        $medidor->save();


        $medidor= new Medidor();
        $medidor->codigo='333333';
        $medidor->val_1=' ';
        $medidor->val_2=' ';
        $medidor->val_3=' ';
        $medidor->direccion='Calle A. Ortega #76';
        $medidor->contribuyente_id=2;
        $medidor->categoria_id=2;
        $medidor->save();


        $medidor= new Medidor();
        $medidor->codigo='444444';
        $medidor->val_1=' ';
        $medidor->val_2=' ';
        $medidor->val_3=' ';
        $medidor->direccion='Av. Las Américas #11';
        $medidor->contribuyente_id=3;
        $medidor->categoria_id=1;
        $medidor->save();


        $medidor= new Medidor();
        $medidor->codigo='555555';
        $medidor->val_1=' ';
        $medidor->val_2=' ';
        $medidor->val_3=' ';
        $medidor->direccion='Av. Los Pinos #65';
        $medidor->contribuyente_id=4;
        $medidor->categoria_id=2;
        $medidor->save();


        $medidor= new Medidor();
        $medidor->codigo='666666';
        $medidor->val_1=' ';
        $medidor->val_2=' ';
        $medidor->val_3=' ';
        $medidor->direccion='Calle Millares #33';
        $medidor->contribuyente_id=5;
        $medidor->categoria_id=2;
        $medidor->save();


        $medidor= new Medidor();
        $medidor->codigo='777777';
        $medidor->val_1=' ';
        $medidor->val_2=' ';
        $medidor->val_3=' ';
        $medidor->direccion='Av.Uviversitaria #15';
        $medidor->contribuyente_id=4;
        $medidor->categoria_id=1;
        $medidor->save();


        $medidor= new Medidor();
        $medidor->codigo='888888';
        $medidor->val_1=' ';
        $medidor->val_2=' ';
        $medidor->val_3=' ';
        $medidor->direccion='Calle. Gareca #9';
        $medidor->contribuyente_id=6;
        $medidor->categoria_id=1;
        $medidor->save();


        $medidor= new Medidor();
        $medidor->codigo='999999';
        $medidor->val_1=' ';
        $medidor->val_2=' ';
        $medidor->val_3=' ';
        $medidor->direccion='Av Siempre Viva #23';
        $medidor->contribuyente_id=7;
        $medidor->categoria_id=2;
        $medidor->save();

    }
}
