<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            // $table->uuid('id');
            // $table->primary('id');

            $table->increments('id');
            $table->string('titulo');
            $table->longText('descricao')->nullable();
            $table->string('icon')->nullable()->default('ti-check');
            $table->string('color')->nullable();
            $table->boolean('ativo')->nullable()->default(true);

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
        Schema::dropIfExists('servicos');
    }
}
