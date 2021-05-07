<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('titulo', 100)->nullable()->default('');
            // $table->text('descricao')->nullable()->default('');
            // $table->text('contexto_historico')->nullable()->default('');
            // $table->string('imagem')->nullable()->default('storage/evento_historico/img/evento.png');
            // $table->string('audio')->nullable()->default('storage/evento_historico/img/audio.mp3');
            // $table->string('data')->nullable()->default('');
            // $table->boolean('fixo')->nullable()->default(false);
            // $table->string('cenario')->nullable();
            // $table->string('posicao_vector3')->nullable();
            // $table->string('tipo')->nullable();
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
        Schema::dropIfExists('cards');
    }
}
