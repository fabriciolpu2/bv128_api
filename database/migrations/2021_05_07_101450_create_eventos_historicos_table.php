<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos_historicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo')->nullable();
            $table->string('titulo', 100)->nullable()->default('');
            $table->text('descricao')->nullable()->default('');
            $table->text('contexto_historico')->nullable()->default('');
            $table->string('imagem')->nullable()->default('storage/evento_historico/img/evento.png');
            $table->string('audio')->nullable()->default('storage/evento_historico/img/audio.mp3');
            $table->string('data')->nullable()->default('');
            $table->string('cenario')->nullable();

            $table->boolean('fixo')->nullable()->default(false);
            $table->string('posicao_vector3')->nullable();
            
            $table->unsignedInteger('recompensa_id');
            
            $table->timestamps();


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
        Schema::dropIfExists('eventos_historicos');
    }
}
