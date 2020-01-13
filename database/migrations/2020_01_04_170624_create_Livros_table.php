<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLivrosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Livros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo')->nullable();
            $table->string('idautor')->nullable();
            $table->string('idtipo')->nullable();
            $table->string('descricao')->nullable();
            $table->string('codigobarras')->nullable();
            $table->string('isbn')->nullable();
            $table->string('edicao')->nullable();
            $table->string('ideditora')->nullable();
            $table->string('ano')->nullable();
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
        Schema::drop('Livros');
    }
}
