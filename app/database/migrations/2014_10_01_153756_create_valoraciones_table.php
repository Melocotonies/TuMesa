<?php

use Illuminate\Database\Migrations\Migration;

class CreateValoracionesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('valoraciones', function ($table) {
            $table->increments('id');
            $table->integer('estrellas');
            $table->longText('comentario');
            $table->integer('nombreCliente');
            $table->integer('restaurante')->unsigned();
            $table->timestamps();
        });

        Schema::table('valoraciones', function($table) {
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
        Schema::drop('valoraciones');
    }

}
