<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // CREACION DE TABLAS REFERENTES A USUARIOS
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 25);
            $table->string('email')->unique();
            $table->string('contrasena', 255);
            $table->timestamp('ultimo_login')->nullable();
            $table->timestamps();
        });

        // Roles
        Schema::create('rol', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });

        // Configuracion por usuario
        Schema::create('configuracion_usuarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuarios_id')->constrained('usuarios')->cascadeOnDelete();
            $table->string('preferencia_alerta');
            $table->enum('configuracion_informe', ['diaria','semanal','mensual']);
            $table->timestamps();
        });

        // Pivot usuarios <-> rol
        Schema::create('usuarios_rol', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuarios_id')->constrained('usuarios')->cascadeOnDelete();
            $table->foreignId('rol_id')->constrained('rol')->cascadeOnDelete();
            $table->timestamps();
        });

        // Sesiones
        Schema::create('sesiones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuarios_id')->constrained('usuarios')->cascadeOnDelete();
            $table->timestamp('fecha_inicio');
            $table->timestamps();
        });

        // CREACION DE TABLAS REFERENTES A CASOS Y SEGUIMIENTOS
        Schema::create('procesos_organizacionales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 25);
            $table->text('descripcion')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });

        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('email')->unique();
            $table->string('telefono', 15)->nullable();
            $table->string('cargo', 50)->nullable();
            $table->timestamps();
        });

        Schema::create('casos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuarios_id')->constrained('usuarios')->cascadeOnDelete();
            $table->foreignId('procesos_organizacionales_id')->constrained('procesos_organizacionales')->cascadeOnDelete();
            $table->string('titulo');
            $table->text('descripcion');
            $table->foreignId('contactos_id')->constrained('contactos')->cascadeOnDelete();
            $table->enum('estado', ['atendido','pendiente','no_atendido']);
            $table->date('fecha_cierre')->nullable();
            $table->timestamps();
        });

        Schema::create('seguimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('casos_id')->constrained('casos')->cascadeOnDelete();
            $table->foreignId('usuarios_id')->constrained('usuarios')->cascadeOnDelete();
            $table->text('observacion')->nullable();
            $table->timestamps();
        });

        // CREACION DE TABLAS REFERENTES A PROCESOS DOCUMENTALES
        Schema::create('informes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuarios_id')->constrained('usuarios')->cascadeOnDelete();
            $table->text('contenido');
            $table->enum('tipo', ['diaria','semanal','mensual']);
            $table->timestamps();
        });

        Schema::create('involucrados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_administrador')->constrained('usuarios')->cascadeOnDelete();
            $table->foreignId('id_comisionado')->constrained('usuarios')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('monitoreos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_involucrados')->constrained('involucrados')->cascadeOnDelete();
            $table->text('detalles');
            $table->timestamps();
        });

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('monitoreos');
        Schema::dropIfExists('involucrados');
        Schema::dropIfExists('informes');
        Schema::dropIfExists('seguimientos');
        Schema::dropIfExists('casos');
        Schema::dropIfExists('contactos');
        Schema::dropIfExists('procesos_organizacionales');
        Schema::dropIfExists('sesiones');
        Schema::dropIfExists('usuarios_rol');
        Schema::dropIfExists('configuracion_usuarios');
        Schema::dropIfExists('rol');
        Schema::dropIfExists('usuarios');
    }
};
