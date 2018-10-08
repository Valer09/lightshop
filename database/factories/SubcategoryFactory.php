<?php

use Faker\Generator as Faker;

$factory->define(App\Subcategory::class, function (Faker $faker) {
    return [
        'name' => 'test_category_4',
        'category' =>  'categoria_2'
        ];

});

