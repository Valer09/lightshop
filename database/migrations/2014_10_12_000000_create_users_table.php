<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email') -> unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('group');
            $table->rememberToken();
            $table->timestamps();
            //Integrity <-> group
            $table->foreign('group')
                ->references('name')->on('groups')
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
        Schema::dropIfExists('Users');

    }
}
