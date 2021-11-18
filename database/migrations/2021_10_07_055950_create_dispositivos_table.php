<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispositivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositivos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 60);
            $table->string('tipo', 60);
            $table->bigInteger('id_tipo_audiovisual')->unsigned();
            $table->string('marca', 60);
            $table->string('modelo', 60);
            $table->timestamps();

            $table->foreign('id_tipo_audiovisual')->references('id')->on('id_tipo_audiovisual');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dispositivos');
    }
}
