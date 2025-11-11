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
        # CREACION DE TABLAS REFERENTES A USUARIOS
        Schema::create('usuarios', function (Blueprint $table) {
            $table->primary('id');
            $table->string('nombre', 25);
            $table->string('contrasena', 15)->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->date('fecha_creacion')->nullable(false);
            $table->$table->timestamps('ultimo_login');
            $table->foreing('rol')->references('id_usuario_rol')->on('usuarios_rol')->OnDelete('cascade');
        });
        schema::create('configuracion_usuarios',function (Blueprint $table) {
            $table->primary('id');
            $table->foreign('id_usuario')
            ->references('id')
            ->on('usuario')
            ->OnDelete('cascade');
            $table->string('preferencia_alerta')->nullable(false);
            $table->enum('configuracion_informe',['diaria','semanal','mensual'])->nullable(false);
        });
        schema::create('usuarios_rol', function (Blueprint $table) {
            $table->primary('id');
            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuario')
                ->OnDelete('cascade');
            $table->foreign('id_rol')
                ->references('id')
                ->on('rol')
                ->OnDelete('cascade');
        });
        schema::create('rol', function (Blueprint $table) {
            $table->primary('id');
            $table->string('nombre')->nullable(false);
            $table->text('descripcion')->nullable(false);
        });
        schema::create('sesiones', function (Blueprint $table) {
            $table->primary('id');
            $table->foreign('id_usuario')
                  ->references('id')
                  ->on('usuario')
                  ->OnDelete('cascade');
            $table->timestamp('fecha_inicio')->nullable(false);
        });


        # CREACION DE TABLAS REFERENTES A CASOS Y SEGUIMIENTOS
        schema::create('procesos_organizacionales', function (Blueprint $table) {
            $table->primary('id_proceso');
            $table->string('nombre', 25);
            $table->text('descripcion')->nullable();
            $table->date('fecha_creacion')->nullable(false);
            $table->string('activo');
        });
        schema::create('contactos', function (Blueprint $table) {
            $table->primary('id_contacto');
            $table->foreign('id_usuario')
            ->references('id')
            ->on('usuario')
            ->OnDelete('cascade');
            $table->string('tipo_contacto')->nullable(false);
            $table->string('detalle_contacto')->nullable(false);
        });
        schema::create('casos', function (Blueprint $table) {
            $table->primary('id_caso');
            $table->foreign('id_usuario')
                  ->references('id')
                  ->on('usuario')
                  ->OnDelete('cascade');
            $table->foreign('id_proceso')
                  ->references('id_proceso')
                  ->on('procesos_organizacionales')
                  ->OnDelete('cascade');
            $table->string('titulo')->nullable(false);
            $table->text('descripcion')->nullable(false);
            $table->enum('estado',['atendido','pendiente','no_atendido'])->nullable(false);
            $table->dates('fecha_creacion')->nullable(false);
            $table->date('fecha_cierre')->nullable();
        });
        schema::create('seguimientos', function (Blueprint $table) {
            $table->primary('id');
            $table->foreign('id_caso')
                  ->references('id_caso')
                  ->on('casos')
                  ->OnDelete('cascade');
            $table->foreign('id_usuario')
                  ->references('id')
                  ->on('usuario')
                  ->OnDelete('cascade');
            $table->date('fecha_seguimiento')->nullable(false);
            $table->text('observacion')->nullable();
        });


        # CREACION DE TABLAS REFERENTES A PROCESOS DOCUMENTALES
        schema::create('informes',function (Blueprint $table){
            $table->primary('id');
            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuario')
                ->OnDelete('cascade');
            $table->timestamp('fecha_generacion')->nullable(false);
            $table->texto('contenido')->nullable(false);
            $table->enum('tipo',['diaria','semanal','mensual'])->nullable(false);
        });
        Schema::create('involucrados', function (Blueprint $table) {
            $table->primary('id');
            $table->foreign('id_administrador')
                  ->references('id')
                  ->on('usuario')
                  ->OnDelete('cascade');
            $table->foreign('id_comisionado')
                  ->references('id')
                  ->on('usuario')
                  ->OnDelete('cascade');
        });
        schema::create('monitoreos', function (Blueprint $table) {
            $table->primary('id');
            $table->foreign('id_involucrados')
                  ->references('id')
                  ->on('involucrados')
                  ->OnDelete('cascade');
            $table->timestamp('fecha_monitoreo')->nullable(false);
            $table->text('detalles')->nullable(false);
        });

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    { # EKIMINACION DE TABLAS REFERENTES A USUARIOS
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('configuracion_usuarios');
        Schema::dropIfExists('usuarios_rol');
        Schema::dropIfExists('rol');
        Schema::dropIfExists('sesiones');
        # ELIMINACION DE TABLAS REFERENTES A DOCUMENTOS
        Schema::dropIfExists('informes'); 
        schema::dropIfExists('involucrados');
        schema::dropIfExists('monitoreos');
        # ELIMINACION DE TABLAS REFERENTES A CASOS Y SEGUIMIENTOS
        schema::dropIfExists('procesos_organizacionales');
        schema::dropIfExists('contactos');
        schema::dropIfExists('casos');
        schema::dropIfExists('seguimientos');
    }
};
