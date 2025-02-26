<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();  // Campo id auto-incremental
            $table->string('nombre');  // Nombre del estudiante
            $table->string('apellido');  // Apellido del estudiante
            $table->string('cedula')->unique();  // Cédula del estudiante
            $table->string('correo')->unique();  // Correo electrónico
            $table->integer('edad');  // Edad del estudiante
            $table->string('carrera');  // Carrera que estudia
            $table->timestamps();  // Created_at, updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
