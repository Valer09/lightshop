<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->timestamps();
            $table->string("name");
            $table->integer("rate");
            $table->integer("id_element")->unsigned();
            $table->string("email")->nullable()->default(NULL);
            $table->string("message")->nullable()->default(NULL);
        });

        Schema::table('reviews', function($table)
        {
            $table->foreign('id_element')->references('id')->on('elements')->onDelete('cascade');
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
