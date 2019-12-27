<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('subject');
            $table->text('description');
            $table->date('date');
            $table->BigInteger('push_id');
            $table->BigInteger('creator_user_id');
            $table->BigInteger('handler_user_id');
            $table->foreign('push_id')->references('id')->on('pushes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('creator_user_id')->references('id')->on('users_codes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('handler_user_id')->references('id')->on('users_codes')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
}
