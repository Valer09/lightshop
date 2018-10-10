<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddressMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country');
            $table->string('street');
            $table->string('city');
            $table->integer('municipality')->unsigned();
            $table->integer('street_number')->unsigned();

            $table->engine = 'MyISAM';


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(\App\Address::class);
    }


    /** $table->string('country');
     *  $table->string('street');
     *  $table->string('city');
     *  $table->integer('municipality');
     *  $table->integer('street number');
     */
}
