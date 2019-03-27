<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddressModder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::table('addresses', function($table) {

            //$table->string('NomeCognome')->default('');
            //$table->string('Provincia')->default('0');
            //$table->renameColumn('municipality','CAP');
            //$table->string('municipality')->default('');


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('C.F');
            $table->dropColumn('P.IVA');
            $table->dropColumn('PEC');
        });
    }
}
