<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dispositivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Schema::table('dispositivos', function (Blueprint $table) {
            $table->integer('id_dispositivos');
            $table->string('codigo');
            $table->string('tipo');
            $table->string('marca');
            $table->string('modelo');
        }); */

        Schema::table('dispositivos', function (Blueprint $table) {
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
        //
    }
}
