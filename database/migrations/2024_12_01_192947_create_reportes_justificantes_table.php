<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesJustificantesTable extends Migration
{
    public function up()
    {
        Schema::create('reportes_justificantes', function (Blueprint $table) {
            $table->matricula();
            $table->string('nombre_alumno');
            $table->integer('dia');
            $table->string('mes');
            $table->integer('anio');
            $table->string('docente_reporta');
            $table->text('notas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reportes_justificantes');
    }
}
