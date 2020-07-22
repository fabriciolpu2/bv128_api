<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100)->nullable()->default('3º A');
            $table->enum('turno', ['MATUTINO', 'VESPERTINO'])->nullable()->default('MATUTINO');
            $table->unsignedInteger('escola_id');
            $table->integer('versao')->unsigned()->nullable()->default(1);
            $table->timestamps();

            $table->foreign('escola_id')->references('id')->on('escolas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turmas');
    }
}
