<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePessoasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->string('cpf')->nullable();
            $table->string('idmembro')->nullable();
            $table->string('dataafiliacao')->nullable();
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
        Schema::drop('Pessoas');
    }
}
