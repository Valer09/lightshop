<?php

use Illuminate\Database\Seeder;

class order_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c='0';
        while( $c < 50 ){
        DB::table('orders')->insert(
            array(['user_id'=>'15', 'address_id' => '1', 'total'=> '21', 'shipping_cost'=>'2', 'tax'=>'1', 'order_shipped'=>'0', 'tracking'=>'bartolini', 'courier_id'=>'1']

            )

        );
        $c++;
        }

    }
}
