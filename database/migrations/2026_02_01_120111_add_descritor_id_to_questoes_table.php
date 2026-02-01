<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescritorIdToQuestoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questoes', function (Blueprint $table) {
            $table->unsignedBigInteger('descritor_id')->nullable()->default(null);
            $table->foreign('descritor_id', 'fk_descritor')
                ->references('id')
                ->on('descritores')
                ->onDelete('null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questoes', function (Blueprint $table) {
            $table->dropForeign('fk_descritor');
            $table->dropColumn('descritor_id');
        });
    }
}
