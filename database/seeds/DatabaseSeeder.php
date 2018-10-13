<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->delete();
            DB::table('users')->insert(
                array(

                )

            );
        // chiamata alla classe seeder "user_seeder". Permette esecuzione seeders con chiamata artista di default
        //$this->call(user_seeder::class);
       // $this->call(element_seeder::class);
        $this->call(subcategory_seeder::class);
        //$this->call(category_seeder::class);
        //$this->call(category_seeder::class);

        //$this->call(group_seeder::class);
    }
}
