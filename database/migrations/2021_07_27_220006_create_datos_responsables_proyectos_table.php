<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosResponsablesProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_responsables_proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('Responsables_Proyecto');
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->string('DocumentoIdentidad');
            $table->string('Cedula_Pasaporte');
            $table->string('Cargo');
            $table->string('Correo');
            $table->string('Telefono');            
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
        Schema::dropIfExists('datos_responsables_proyectos');
    }
}
