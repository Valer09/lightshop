<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShowroomPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showroom_photo_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alt')->default('');
            $table->string('name');
            $table->string('size')->default('');
            $table->string('path');
            $table->integer('element_id')->unsigned();
            $table->timestamps();

            $table->foreign('element_id')
            ->references('id')->on('elementsshowrooms')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showroom_photo_table');
    }
}
