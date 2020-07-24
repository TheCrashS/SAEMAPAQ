<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidors', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('val_1');
            $table->string('val_2');
            $table->string('val_3');

            $table->boolean('estado')->default(true);
            $table->string('direccion')->nullable()->default('N/A');

            $table->bigInteger('contribuyente_id')->unsigned()->nullable();
            $table->bigInteger('categoria_id')->unsigned()->default(1);

            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('contribuyente_id')->references('id')->on('contribuyentes');
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
        Schema::dropIfExists('medidors');
    }
}
