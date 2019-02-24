<?php

use Illuminate\Database\Seeder;

class subcategory_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // factory(App\Subcategory::class, 1)->create();  //50 fake user creati con un unico comando.

/**        DB::table('subcategories')->delete();
        DB::table('subcategories')->insert(
            array(['name'=>'Utensili','category'=>'pappettareale']

            )

       );
 */

    }
}

