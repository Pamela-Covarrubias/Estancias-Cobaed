<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaMedicasTable extends Migration
{
    /**
     * Ejecuta las migraciones.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_medicas', function (Blueprint $table) {
            $table->string('matricula')->primary();
            $table->string('day');
            $table->string('month');
            $table->string('year');
            $table->string('iptestu');
            $table->string('iptsemestre');
            $table->string('iptturno');
            $table->string('ipttelefono');
            $table->string('iptcelular');
            $table->string('iptdireccion');
            $table->string('iptemergy');
            $table->string('iptsalud');
            $table->string('ipthepatitis');
            $table->string('iptgastritis');
            $table->string('iptanemia');
            $table->string('iptdiabetes');
            $table->string('iptha');
            $table->string('iptepilepsia');
            $table->string('iptasma');
            $table->string('iptrespiratorias');
            $table->string('iptenfespecifico');
            $table->string('antibiotico');
            $table->string('iptantibiotico');
            $table->string('antibioticono');
            $table->string('medicamento');
            $table->string('iptmedicamento');
            $table->string('medicamentono');
            $table->string('alimento');
            $table->string('iptalimento');
            $table->string('alimentono');
            $table->string('animales');
            $table->string('iptanimales');
            $table->string('animalesno');
            $table->string('picaduras');
            $table->string('iptpicaduras');
            $table->string('picadurasno');
            $table->timestamps();
        });
    }

    /**
     * Revierte las migraciones.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ficha_medicas');
    }
}
