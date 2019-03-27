<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReferredTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table){
            $table->increments('id');
            $table->string('name')-> unique();

            //  $table->engine = 'MyISAM';

        });

        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country');
            $table->string('street');
            $table->string('city');
            $table->integer('street_number')->unsigned();
            $table->integer('user_id')->unsigned();


            //   $table->engine = 'MyISAM';


        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('email') -> unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('group');
            $table->integer('address_id')->unsigned()->default('0');
            $table->rememberToken();
            $table->timestamps();
            //Integrity <-> group
            $table->foreign('group')
                ->references('name')->on('groups')
                ->onDelete('cascade');

            //   $table->engine = 'MyISAM';

        });

        Schema::create('couriers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('courier_name');
            $table->string('tracking_link');

            //   $table->engine = 'MyISAM';
        });



        Schema::create('categories', function (Blueprint $table) {
            $table->string('name') -> unique();
            // $table->string('subcategory');

            // $table->engine = 'MyISAM';
        });

        Schema::create('brands', function (Blueprint $table) {
            $table->string('name')->primary();
            $table->string('link');
            $table->string('description');

            //  $table->engine = 'MyISAM';
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->float('total')->unsigned();
            //  $table->timestamp('email_verified_at')->nullable();
            $table->integer('address_id')->unsigned();
            $table->float('shipping_cost')->unsigned();
            $table->float('tax')->unsigned();
            $table->timestamp('added_on');
            $table->tinyInteger('order_shipped');
            $table->string('tracking');
            $table->integer('courier_id')->unsigned();

            //Constraints
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('address_id')
                ->references('id')->on('addresses')
                ->onDelete('cascade');

            $table->foreign('courier_id')
                ->references('id')->on('couriers')
                ->onDelete('cascade');

            // $table->engine = 'MyISAM';
        });

        Schema::create('elements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('subcategories');
            $table->double('price')-> unsigned();
            $table->integer('availability')-> unsigned();
            $table->string('description');
            $table->string('brand');

            // $table->engine = 'MyISAM';

            //constraints
            $table->foreign('brand')
                ->references('name')->on('brands')
                ->onDelete('cascade');

        });

        Schema::create('subcategories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name') ->unique();
            $table->string('category');
            $table->foreign('category')
                ->references('name')->on('categories')
                ->onDelete('cascade');
            // $table->engine = 'MyISAM';

        });

        Schema::create('cat_showrooms', function (Blueprint $table) {
            $table->string('name')->primary();
            $table->string('description');
        });

        Schema::create('subcat_showrooms', function (Blueprint $table) {
            $table->string('name')->primary();
            $table->string('description');
            $table->string('cat');

            //Constraints
            $table->foreign('cat')
                ->references('name')->on('Cat_Showrooms')
                ->onDelete('cascade');

            //    $table->engine = 'MyISAM';
        });

        Schema::create('ElementsShowRooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('pathPhoto');
            $table->string('linkBuy');
            $table->string('nameSubCategory');

            //    $table->engine = 'MyISAM';
        });






    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Groups');
        Schema::dropIfExists('Users');
        Schema::dropIfExists('Couriers');
        Schema::dropIfExists('Addresses');
        Schema::dropIfExists('Categories');
        Schema::dropIfExists('Brands');
        Schema::dropIfExists('Orders');
        Schema::dropIfExists('Elements');
        Schema::dropIfExists('Subcategories');
        Schema::dropIfExists('Cat_Showrooms');
        Schema::dropIfExists('SubCat_Showrooms');
        Schema::dropIfExists('ElementsShowRooms');
    }
}
