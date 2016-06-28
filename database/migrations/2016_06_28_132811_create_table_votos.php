<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votos', function (Blueprint $table) {
            $table->integer('id_ver')->unsigned();
            $table->integer('id_proj')->unsigned();
            $table->integer('id_ses')->unsigned();
            $table->integer('tipo');
            $table->date('data');
            $table->primary(['id_ver', 'id_proj', 'id_ses']);
            $table->foreign('id_ver')->references('id')->on('vereador');
            $table->foreign('id_proj')->references('id')->on('projetos');
            $table->foreign('id_ses')->references('id')->on('sessao');
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
        Schema::drop('votos');
    }
}
