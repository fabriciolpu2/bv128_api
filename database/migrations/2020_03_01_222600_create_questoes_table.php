<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('questionario_id');
            $table->string('titulo', 300)->nullable();
            $table->string('descricao', 300)->nullable();
            $table->string('ano', 300)->nullable();
            $table->float('valor')->nullable();
            $table->string('contexto_historico', 300)->nullable();
            $table->integer('versao')->unsigned()->nullable()->default(1);
            $table->timestamps();

            $table->foreign('questionario_id')->references('id')->on('questionarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questoes');
    }
}
