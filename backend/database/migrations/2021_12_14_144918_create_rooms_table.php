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
            // ホスト1人とNULL許容のメンバー3人
            $table->foreignId('host_id')->constrained('users');
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
            $table->integer('genre');
            $table->integer('maximum_number_of_people');
            $table->integer('number_of_people')->nullable();
            $table->string('start_time');
            $table->string('hold_time');
            $table->string('detail')->nullable();
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
