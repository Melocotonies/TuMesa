<?php

use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('reservas', function ($table) {
            $table->increments('id');
            $table->date('dia');
            $table->time('hora');
            $table->integer('numPersonas');
            $table->integer('restaurante')->unsigned();
            $table->integer('nombreCliente');
            $table->integer('emailCliente');
            $table->integer('telefonoCliente');
            $table->timestamps();
        });

        Schema::table('reservas', function($table) {
            $table->foreign('restaurante')
                    ->references('id')->on('restaurantes')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('reservas');
    }

}