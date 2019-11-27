<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlumnosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_grado');
            $table->integer('id_grupo');
            $table->integer('id_ciclo');
            $table->text('nombre_alumno')->nullable();
            $table->text('apellidos_alumno')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->integer('id_estado');
            $table->integer('id_municipio');
            $table->text('direccion')->nullable();
            $table->integer('cp')->nullable();
            $table->integer('id_tipo_sangre');
            $table->text('num_control')->nullable();
            $table->integer('nivel_estudio');
            $table->text('comentarios')->nullable();
            $table->integer('activo');

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
        Schema::drop('alumnos');
    }
}
