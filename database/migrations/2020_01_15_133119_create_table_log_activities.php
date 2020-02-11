<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLogActivities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('origin_model');
            $table->uuid('origin_id')->nullable();
            $table->longText('url');
            $table->string('method');
            $table->string('ip');
            $table->string('agent')->nullable();
            $table->uuid('user_id')->nullable();
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
        Schema::drop('log_activities');
    }
}
