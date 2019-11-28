<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlumnosPersonalInfosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_personal_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable()->nullable();
            $table->datetime('date_birth')->nullable();
            $table->string('place_birth')->nullable();
            $table->integer('gender')->nullable();
            $table->string('native_language')->nullable();
            $table->integer('ethnicity')->nullable();
            $table->integer('race')->nullable();
            $table->integer('special_ed')->nullable();
            $table->integer('gifted_talented')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('country')->nullable();
            $table->string('tel')->nullable();
            $table->string('parents_cell')->nullable();
            $table->integer('id_personal')->nullable();
            $table->string('personal_info')->nullable();
            $table->string('email')->nullable();
            $table->string('parents_email')->nullable();
            $table->string('name_parent')->nullable();
            $table->string('last_school')->nullable();
            $table->string('phone_school')->nullable();
            $table->string('school_address')->nullable();
            $table->datetime('last_date_attended')->nullable();
            $table->string('last_complete_level')->nullable();
            $table->text('comments')->nullable();
            $table->text('photo_alumno')->nullable();
            $table->integer('grade')->nullable();
            $table->integer('level')->nullable();
            $table->integer('group')->nullable();
            $table->integer('school_cycle')->nullable();
            $table->string('num_control')->nullable();

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
        Schema::drop('alumnos_personal_infos');
    }
}
