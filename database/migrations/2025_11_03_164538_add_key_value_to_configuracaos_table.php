<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKeyValueToConfiguracaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('configuracaos', function (Blueprint $table) {
            $table->string('key')->unique()->nullable()->default(null);
            $table->string('value')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('configuracaos', function (Blueprint $table) {
            $table->dropColumn(['key', 'value']);
        });
    }
}
