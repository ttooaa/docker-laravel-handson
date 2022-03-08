<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prefecture_id')
                ->nullable()
                ->constrained();
            //上記１行で外部成約キーをかけることができる
            //$table->unsignedBigInteger('prefecture_id')->nullable();
            $table->string('email')->unique();
            //メール送信機能 未実装
            $table->timestamp('email_verified_at')->nullable();
            $table->string('name');
            $table->string('password');
            $table->rememberToken();
            $table->string('sex')->nullable();
            $table->string('hobby')->nullable();
            $table->string('profile')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('users');
    }
}
