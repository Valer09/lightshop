<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderMigrationFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->float('total')->unsigned();
            //  $table->timestamp('email_verified_at')->nullable();
            $table->integer('address_id')->unsigned();
            $table->float('shipping_cost')->unsigned();
            $table->float('tax')->unsigned();
            $table->timestamps();
            $table->tinyInteger();
            $table->string('tracking');
            $table->integer('courier_id')->unsigned();

            //Constraints
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('address_id')
                ->references('id')->on('address')
                ->onDelete('cascade');

            $table->foreign('courier')
                ->references('id')->on('couriers')
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
        Schema::dropIfExists('Orders');
    }
}

