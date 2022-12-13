<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmarcompras', function (Blueprint $table) {
            $table->id();
            $table ->string('metodopago');
            $table ->string('numerotargeta');
            $table ->date('fechacaducidad');
            $table ->string('nombre');
            $table ->string('apellidos');
            $table ->string('localidad');
            $table ->string('codigopostal');
            $table ->string('pais');
            $table ->string('telefono');
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
};
