<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NotReferredTableMigration extends Migration
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
            $table->integer('element_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();

            //   $table->engine = 'MyISAM';

            //constraints
            $table->foreign('element_id')
                ->references('id')->on('Elements')
                ->onDelete('cascade');

            //constraints
            $table->foreign('subcategory_id')
                ->references('id')->on('Subcategories')
                ->onDelete('cascade');
        });

        Schema::create('user_group', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('group_id')->unsigned();

            //    $table->engine = 'MyISAM';

            //constraints
            $table->foreign('user_id')
                ->references('id')->on('Users')
                ->onDelete('cascade');

            //constraints
            $table->foreign('group_id')
                ->references('id')->on('Groups')
                ->onDelete('cascade');
        });

        Schema::create('News', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->date('startDate');
            $table->date('stopDate');
            $table->string('pathPhoto');
            $table->string('linkBuy');

            //   $table->engine = 'MyISAM';
        });

        Schema::create('Offerts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('pathPhoto');
            $table->string('linkBuy');

            //  $table->engine = 'MyISAM';
        });

        Schema::create('ElPivotSubShowroom', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('elem_id')->unsigned();
            $table->string('nameCat');

            $table->foreign('elem_id')
                ->references('id')->on('ElementsShowRoom')
                ->onDelete('cascade');

            $table->foreign('nameCat')
                ->references('name')->on('SubCat_showroom')
                ->onDelete('cascade');

            //   $table->engine = 'MyISAM';
        });

        Schema::create('OrderDetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orders_id')->unsigned();
            $table->integer('element_id')->unsigned();
            $table->string('element_name');
            $table->float('price')->unsigned();
            $table->string('details');
            $table->integer('quantity')->unsigned();

            //constraints
            $table->foreign('orders_id')
                ->references('id')->on('orders')
                ->onDelete('cascade');

            $table->foreign('element_id')
                ->references('id')->on('elements')
                ->onDelete('cascade');

            //  $table->engine = 'MyISAM';

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
        Schema::dropIfExists('element_id');
        Schema::dropIfExists('user_group');
        Schema::dropIfExists('news');
        Schema::dropIfExists('offerts');
        Schema::dropIfExists('ElPivotSubShowroom');
        Schema::dropIfExists('OrderDetails');
    }
}
