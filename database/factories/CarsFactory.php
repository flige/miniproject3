<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {

    return [

        'model' => $faker->randomElement($array = array('Ford', 'Honda', 'Toyota')),
        'make'=> $faker->randomElement($array = array ('sedan', 'coupe', 'crossover')),
        'year'=> $faker->year($max= 'now' ),
    ];
});
