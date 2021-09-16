<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', '100');
            $table->text('reviews');
            $table->timestamp('date');
            $table->BigInteger('users_id')->unsigned();
            $table->BigInteger('organisations_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
//            $table->foreignId('users_id')->constrained('users');
            $table->foreign('organisations_id')->references('id')->on('organisations');
//            $table->foreignId('organisations_id')->constrained('organisations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
