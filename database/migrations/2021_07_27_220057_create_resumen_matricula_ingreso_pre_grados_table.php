<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumenMatriculaIngresoPreGradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumen_matricula_ingreso_pre_grados', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_Carrera');
            $table->string('N_Ingresos');
            $table->string('C_Prosecucion');
            $table->string('C_Egresados');
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
        Schema::dropIfExists('resumen_matricula_ingreso_pre_grados');
    }
}
