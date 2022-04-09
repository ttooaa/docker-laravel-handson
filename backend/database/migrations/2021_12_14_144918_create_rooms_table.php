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
            $table->foreignId('member_1_id')
            ->nullable()
            ->constrained('users');
            $table->foreignId('member_2_id')
            ->nullable()
            ->constrained('users');
            $table->foreignId('member_3_id')
            ->nullable()
            ->constrained('users');
            $table->string('title');
            $table->string('genre');
            $table->integer('number_of_people');
            $table->string('detail')->nullable();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
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
