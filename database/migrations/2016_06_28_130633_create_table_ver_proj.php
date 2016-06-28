<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVerProj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ver_proj', function (Blueprint $table) {
            $table->integer('id_ver')->unsigned();
            $table->integer('id_proj')->unsigned();
            $table->primary(['id_ver', 'id_proj']);
            $table->foreign('id_ver')->references('id')->on('vereador');
            $table->foreign('id_proj')->references('id')->on('projetos');
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
        Schema::drop('ver_proj');
    }
}
