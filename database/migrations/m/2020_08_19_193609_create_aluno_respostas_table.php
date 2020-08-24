<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunoRespostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_respostas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('aluno_id')->nullable();
            $table->unsignedInteger('questao_id')->nullable();
            $table->unsignedInteger('resposta_id')->nullable();
            $table->boolean('correta')->nullable()->default(false);
            
            $table->timestamps();

            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
            $table->foreign('questao_id')->references('id')->on('questoes')->onDelete('cascade');
            $table->foreign('resposta_id')->references('id')->on('alternativas_questoes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_respostas');
    }
}
