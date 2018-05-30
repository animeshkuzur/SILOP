<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuxLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lux_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lux');
            $table->datetime('timestamp');
            $table->integer('room_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('lux_logs',function($table){
            $table->foreign('room_id')->references('id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lux_logs');
    }
}
