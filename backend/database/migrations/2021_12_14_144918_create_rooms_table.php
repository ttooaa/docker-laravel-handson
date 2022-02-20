<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('room_id')->unique();
            $table->unsignedBigInteger('host_user_id')->unique();
            $table->string('title');
            $table->string('detail')->nullable();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('number_of_perple');
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
        Schema::dropIfExists('rooms');
    }
}
