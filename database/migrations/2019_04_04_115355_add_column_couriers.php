<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCouriers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couriers_name', function (Blueprint $table) {
            $table->string('name') -> unique();
            $table->string('tracking_link')->nullable();
        });

        Schema::table('couriers', function (Blueprint $table) {
            $table->dropColumn('tracking_link');
            $table->double('pesomin')->unsigned()->nullable();
            $table->double('pesomax')->unsigned()->nullable();
            $table->integer('stima_giorni')->unsigned()->nullable();
            $table->double('price')->unsigned()->nullable();
        
            $table->foreign('courier_name')->references('name')->on('couriers_name')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('couriers', function (Blueprint $table) {
            //
        });
    }
}
