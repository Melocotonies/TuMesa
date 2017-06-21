<?php

use Illuminate\Database\Migrations\Migration;

class CreateRestaurantesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('restaurantes', function ($table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nombre')->unique();
            $table->longText('descripcion');
            $table->string('tipo');
            $table->string('horarioDes');
            $table->string('horarioCom');
            $table->string('horarioCen');
            $table->integer('maxPersonas');
            $table->boolean('zonaFumadores');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('poblacion');
            $table->string('calle');
            $table->integer('num');
            $table->integer('cp');
            $table->string('formaPago');
            $table->longText('carta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('restaurantes');
    }

}
