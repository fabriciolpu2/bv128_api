<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunoHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_historicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('aluno_id')->nullable();
            $table->unsignedInteger('missoes_concluidas')->nullable();
            $table->unsignedInteger('versao')->nullable();
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
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
        Schema::dropIfExists('aluno_historicos');
    }
}

