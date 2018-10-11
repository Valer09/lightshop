<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubCatShowroomMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SubCat_showroom', function (Blueprint $table) {
            $table->string('name')->primary();
            $table->string('description');
            $table->string('cat');

            //Constraints
            $table->foreign('cat')
                ->references('name')->on('Cat_Showroom')
                ->onDelete('cascade');

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
        Schema::dropIfExists('SubCat_showroom');
    }
}
