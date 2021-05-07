<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativasQuestoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternativas_questoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('questao_id');
            $table->boolean('correta')->nullable()->default(false);
            $table->string('descricao', 300)->nullable();
            $table->timestamps();
            $table->integer('versao')->unsigned()->nullable()->default(1);
            $table->foreign('questao_id')->references('id')->on('questoes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternativas_questoes');
    }
}
