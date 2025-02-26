<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estudiante_id')->constrained('estudiantes')->onDelete('cascade');
            $table->string('asignatura');
            $table->decimal('nota', 5, 2);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('notas');
    }
};

