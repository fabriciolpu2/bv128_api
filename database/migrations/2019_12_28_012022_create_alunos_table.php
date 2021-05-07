<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100)->nullable()->default('Aluno 01');
            $table->string('matricula', 100)->nullable()->default('000000');
            $table->unsignedInteger('turma_id');
            $table->integer('idade')->unsigned()->nullable()->default(12);
            $table->integer('pontuacao')->unsigned()->nullable()->default(0);
            $table->integer('missoes_concluidas')->unsigned()->nullable()->default(0);
            $table->integer('versao')->unsigned()->nullable()->default(1);
            $table->timestamps();

            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
