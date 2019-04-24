<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModOfferts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offerts', function (Blueprint $table) {
            $table->integer('id_element')->unsigned();
            $table->dropColumn('description');
            $table->dropColumn('pathPhoto');
            $table->dropColumn('linkBuy');
            $table->double('discount_perc')->unsigned();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('date_start')->nullable();
            $table->integer('duration_day')->unsigned();

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
        Schema::table('offerts', function (Blueprint $table) {
            //
        });
    }
}
