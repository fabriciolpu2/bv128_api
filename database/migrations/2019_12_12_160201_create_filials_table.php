<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiais', function (Blueprint $table) {
            // $table->uuid('id');
            // $table->primary('id');

            $table->increments('id');
            $table->string('nome');
            $table->integer('ordem')->unique();
            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('cidade');
            $table->string('estado');
            $table->string('email')->nullable();
            $table->string('contato_1')->nullable();
            $table->string('contato_2')->nullable();
            $table->string('contato_3')->nullable();
            $table->boolean('ativo')->default(true);
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
        Schema::dropIfExists('filials');
    }
}
