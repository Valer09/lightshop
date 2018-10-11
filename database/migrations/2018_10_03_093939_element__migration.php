<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ElementMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Elements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('subcategories');
            $table->double('price')-> unsigned();
            $table->integer('availability')-> unsigned();
            $table->string('description');
            $table->string('brand');

            $table->engine = 'MyISAM';

            //constraints
            $table->foreign('brand')
                ->references('name')->on('Brands')
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
        Schema::dropIfExists('elements');
    }
}
