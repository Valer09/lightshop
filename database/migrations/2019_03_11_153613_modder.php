<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Modder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            // $table->string('CF')->default('A');
            // $table->string('IVA')->default('0');
            $table->string('PEC')->default('blabla@pec.it');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            //   $table->dropColumn('C.F');
            //  $table->dropColumn('P.IVA');
            $table->dropColumn('PEC');
        });
    }
}
