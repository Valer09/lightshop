<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ElemShowRoomSubCategoryShowRoomMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //pivot table
        Schema::create('ElPivotSubShowroom', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('elem_id');
            $table->string('nameCat');

            $table->foreign('elem_id')
                ->references('id')->on('ElementsShowRoom')
                ->onDelete('cascade');

            $table->foreign('nameCat')
                ->references('name')->on('SubCat_showroom')
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
        //
    }
}
