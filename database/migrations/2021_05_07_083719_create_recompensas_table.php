<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecompensasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recompensas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo');
            $table->string('descricao')->nullable();
            $table->string('imagem')->nullable();
            $table->string('valor')->nullable();
            $table->timestamps();
        });

        Schema::create('recompensas_aluno', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->unsignedInteger('aluno_id');
            $table->unsignedInteger('recompensa_id');
            $table->string('recompensa_tipo');
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
            $table->foreign('recompensa_id')->references('id')->on('recompensas')->onDelete('cascade');
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
        Schema::dropIfExists('recompensas_aluno');
        Schema::dropIfExists('recompensas');
        
    }
}

