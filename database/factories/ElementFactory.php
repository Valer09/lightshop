<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Element::class, function () {
    return [
        'name' => str_random(5),
        'price' =>  random_int(1,300),
        'availability' => random_int(0,100),
        'subcategories' => 'test_category_1',
        'description' => '---'
    ];
});
