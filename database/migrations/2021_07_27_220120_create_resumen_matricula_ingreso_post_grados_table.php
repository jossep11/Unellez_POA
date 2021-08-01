<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumenMatriculaIngresoPostGradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumen_matricula_ingreso_post_grados', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_PostGrado');
            $table->string('TipoPostgrado');
            $table->string('N_IngresosP');
            $table->string('C_ProsecucionP');
            $table->string('C_EgresadosP');
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
        Schema::dropIfExists('resumen_matricula_ingreso_post_grados');
    }
}
