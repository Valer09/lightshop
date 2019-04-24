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
            $table->string('description')->nullable()->default(null)->change();
            $table->string('pathPhoto')->nullable()->default(null)->change();
            $table->string('linkBuy')->nullable()->default(null)->change();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
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
