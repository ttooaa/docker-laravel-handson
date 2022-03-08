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
            $table->id();
            $table->foreignId('host_id')->constrained('users');
            //member_user_idをどうするか
            $table->foreignId('member_id')->constrained('users');
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
