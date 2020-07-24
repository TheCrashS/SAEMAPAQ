<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobros', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_cobro')->default(now()->toDateString());
            $table->bigInteger('contribuyente_id')->unsigned();
            $table->double('monto');
            $table->bigInteger('categoria_id')->unsigned();
            $table->double('categoria_monto');

            $table->foreign('contribuyente_id')->references('id')->on('contribuyentes');
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cobros');
    }
}
