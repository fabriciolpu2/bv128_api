<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogadorRespostasTable extends Migration
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
            $table->unsignedInteger('aluno_id');
            $table->unsignedInteger('questao_id');
            $table->unsignedInteger('resposta_id');
            $table->unsignedInteger('recompensa_id');
            $table->boolean('correta');
            $table->integer('valor')->unsigned()->nullable()->default(0);
            $table->timestamps();

            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
            $table->foreign('questao_id')->references('id')->on('questoes')->onDelete('cascade');
            $table->foreign('resposta_id')->references('id')->on('alternativas_questoes')->onDelete('cascade');;
            $table->foreign('recompensa_id')->references('id')->on('recompensas')->onDelete('cascade');
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
