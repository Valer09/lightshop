<?php

use Illuminate\Database\Seeder;

class group_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'name' => "Visitor"]);

    }
}
