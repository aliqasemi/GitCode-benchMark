<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePushesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pushes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('file');
            $table->text('comment');
            $table->dateTime('date_and_time');
            $table->BigInteger('branch_id');
            $table->BigInteger('user_id');
            $table->foreign('branch_id')->references('id')->on('branches')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users_codes')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pushes');
    }
}
