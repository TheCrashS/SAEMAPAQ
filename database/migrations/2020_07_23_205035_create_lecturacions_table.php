<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturacions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_lectura')->default(now()->toDateString());
            $table->double('consumo')->default(1);
            $table->bigInteger('medidor_id')->unsigned();

            $table->foreign('medidor_id')->references('id')->on('medidors');

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
        Schema::dropIfExists('lecturacions');
    }
}
