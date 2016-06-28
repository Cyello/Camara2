<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVereador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vereador', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 255);
            $table->date('data');
            $table->string('string')->default('(88)90000-0000');
            $table->string('filiacao');
            $table->string('mandatos');
            $table->string('avatar')->default('default.jpg');
            $table->string('email');
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
        Schema::drop('vereador');
    }
}
