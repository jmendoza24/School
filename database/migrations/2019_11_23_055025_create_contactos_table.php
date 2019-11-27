<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_alumno');
            $table->text('nombre_contacto')->nullable();
            $table->text('telefonoc')->nullable();
            $table->text('correo')->nullable();
            $table->text('direccion_contacto')->nullable();
            $table->integer('cpc')->nullable();
            $table->integer('id_estadoc');
            $table->integer('id_municipioc');
            $table->text('comentariosc')->nullable();
            $table->text('telefono_adicional')->nullable();
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
        Schema::drop('contactos');
    }
}
