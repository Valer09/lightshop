<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderDetailsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrderDetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orders_id');
            $table->integer('element_id');
            $table->string('element_name');
            $table->float('price')-> unsigned();
            $table->string('details');
            $table->integer('quantity')-> unsigned();

            //constraints
            $table->foreign('orders_id')
                ->references('id')->on('orders')
                ->onDelete('cascade');

            $table->foreign('element_id')
                ->references('id')->on('elements')
                ->onDelete('cascade');

            $table->foreign('element_name')
                ->references('name')->on('elements')
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
        Schema::dropIfExists('OrdersDetails');
    }
}
