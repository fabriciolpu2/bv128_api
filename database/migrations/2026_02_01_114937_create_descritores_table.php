<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescritoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descritores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo')->index();
            $table->text('descricao')->nullable()->default(null);
            $table->string('slug')->unique()->nullable()->default(null);
            $table->string('serie')->nullable()->default(null);
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
        Schema::dropIfExists('descritores');
    }
}
