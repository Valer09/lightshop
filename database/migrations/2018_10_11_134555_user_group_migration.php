<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserGroupMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('group_id');

            $table->engine = 'MyISAM';

            //constraints
            $table->foreign('user_id')
                ->references('id')->on('Users')
                ->onDelete('cascade');

            //constraints
            $table->foreign('group_id')
                ->references('id')->on('Group')
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
        Schema::dropIfExists('user_group');
    }
}
