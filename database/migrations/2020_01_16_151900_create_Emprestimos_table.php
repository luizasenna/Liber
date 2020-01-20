<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmprestimosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Emprestimos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('iduser')->nullable();
            $table->string('idlivro')->nullable();
            $table->string('datacriacao')->nullable();
            $table->string('datadevolucao')->nullable();
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
        Schema::drop('Emprestimos');
    }
}
