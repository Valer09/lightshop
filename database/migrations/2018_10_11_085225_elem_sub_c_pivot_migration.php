<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ElemSubCPivotMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategory_elements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('element_id');
            $table->string('subcategory_id');

            $table->engine = 'MyISAM';

            //constraints
            $table->foreign('element_id')
                ->references('id')->on('Elements')
                ->onDelete('cascade');

            //constraints
            $table->foreign('subcategory_id')
                ->references('id')->on('Subcategories')
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
        Schema::dropIfExists('subcategory_elements');
    }
}
